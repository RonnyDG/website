<?php
/**
 * notfound.php handles any "404 Not Found" errors
 *
 * It gathers all the information it can find relating to the Not Found error.  It  
 * operates as follows:
 * - If the visitor is looking for "robots.txt", it's probably a (good) search engine 
 *    bot.  It's good to know about the visit, so we create/update a file called 
 *    "bots-log.txt" in the root directory with details of the bot's visit.  We then 
 *    set an appropriate message for the 404 page.
 * - If the visitor hasn't followed a known link, they may have typed the URL directly 
 *    into the bar at the top of the browser and made a mistake.  So let's set up a 
 *    helpful 404 message for them.
 * - If it looks like there might be a case problem, we can redirect to the correct page.
 * - If the visitor has followed a known link, then we'd better know about the problem. 
 *    So we send an email to the webmaster and then set up a suitable message for the 
 *    404 page.
 * Then we display the resulting page.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 10-11-2015, 23:121h
 * @copyright 2015 Haven Consulting
 */

  /*----------------------------------------------------------------------------*/
  /* First, let's set the default values: */
  /*----------------------------------------------------------------------------*/
  /* - the recipient for any emails */
  $to = "d.argles@gmx.com";
  /* - the subject line for any emails */
  $subject = "Not Found Problem";
  /* - the message for any emails */
  $message = "There has been a Not Found problem on your website.";

  /* - the name of the bots logfile */
  $botslog = "logs/bots-log.txt";
  /* - the record of the last bot to visit */
  $lastbotlog = "logs/bots-last.txt";
  /* - the filename for the log of any not found errors */
  $notfoundlog = "logs/notfound-log.csv";
  
  /* - a message for those looking for robots.txt */
  $botMessage = "<h3>404 Page Not Found</h3>";
  /* - a message for anyone who may have (mis-)typed the URL rather than following a link */
  $noRefererMessage = $botMessage;
  /* - a message for anyone who may be following an old, cached link */
  $oldLinkMessage = $botMessage;
  /* This is the message folks need to see if they've followed a link and it's broken */
  $brokenLinkMessage = $botMessage;

  /* - an array of any legacy URLs we want to redirect */
  $legacySites = array("test","scosha");

  /* The default condition is that we will send ourselves an email */
  $sendemail = TRUE;

  /*----------------------------------------------------------------------------*/
  /* Now let's get the relevant information for this not found condition */
  /*----------------------------------------------------------------------------*/
  $requester = $_SERVER['REQUEST_URI'];
  $requesterLower = strtolower($requester);
  $remoteAddr = $_SERVER['REMOTE_ADDR'];
  $hostname = gethostbyaddr($remoteAddr);
  $referer = $_SERVER['HTTP_REFERER'];
  $remoteHost = $_SERVER['REMOTE_HOST'];
  $remoteUser = $_SERVER['REMOTE_USER'];

  /*----------------------------------------------------------------------------*/
  /* We need to read in the information in the ini file */
  /*----------------------------------------------------------------------------*/
  /* First, we'd better check that the ini file is there */
  if(parse_ini_file("notfound.ini",true))
  {
    /* If it is, read the file in as an object... */
    $inifile = (object) parse_ini_file("notfound.ini",true);
    /* ...and update our values */
    $to = $inifile->mailto;
    $subject = $inifile->subject;
    $message = $inifile->message;
    
    $botMessage = $inifile->botMessage;
    $noRefererMessage = $inifile->noRefererMessage;
    $oldLinkMessage = $inifile->oldLinkMessage;
    $brokenLinkMessage = $inifile->brokenLinkMessage;

    $botslog = $inifile->botslog;
    $lastbotlog = $inifile->lastbotlog;
    $notfoundlog = $inifile->notfoundlog;
    
    /* Now read in the array */
    $legacySites = array();
    foreach ($iniFile->sites as $site => $value) $legacySites[] = $site;
  }
    
/*echo("<pre>");
print_r($inifile);
echo("</pre>");*/

  /* Let's deal with any legacy URL problems first */
  /* We need to work out which directory is being requested */
  $urlParts = pathinfo($requesterLower);
  /*  Note, pathinfo returns:-
   *  - Path: $urlParts['dirname']
   *  - File: $urlParts['basename']
   *  - Extension: $urlParts['extension']
   *  - Filename: $urlParts['filename']
   */
  /* Now check for the existence of a legacy site in the requested url */
  /* Note that it is ESSENTIAL to use not identical (!==) rather than not equal (!=) */
  foreach($legacySites as $site)
  {
    $legacyURL = "/".$site;
    if(strstr($urlParts['dirname'], $site) !== FALSE)
    {
      /* Teleport to $legacyURL */
      header("Location: ".$legacyURL);
      exit;
    }
  }

  /* Teleport if we think there might be an html or case problem */
  $urlComment = "";
  /* First, let's make sure we're looking for a php page, not an html one */
  $newURL = str_replace(".html", ".php", $requesterLower);
  /* Now let's check that the page we're going to teleport to actually exists */
  if(($requester != $newURL) && file_exists(substr($newURL, 1))) 
  {
      /* Teleport to $newURL */
      header("Location: ".$newURL);
      exit;
  }

  /* Default message is the broken link message */
  $htmlMessage = $brokenLinkMessage;

  /* If the referer exists, it's a person or a bot working from an old, cached link */
  @$validRef = fopen($referer, 'r');
  if (($validRef != FALSE)) fclose($validRef);
  else if ($referer != "")
  {
    $htmlMessage = $oldLinkMessage;
    $sendemail = FALSE;
  }
  
  /* We need to trap the case where there's no referer (i.e. a mis-typed URL) */
  if ($referer=="")
  {
    $htmlMessage = $noRefererMessage;
    $sendemail = FALSE;
  }

  /* Is the visitor asking for "robots.txt"? */
  if($requester=="/robots.txt")
  {
    /* If so, create/update the bots-log.txt file in the root directory */
    $line = date("d/m/Y")." ".strftime("%T")." : ".$hostname."\n";
    if(!file_put_contents($botslog, $line, FILE_APPEND))echo("File put failed:\n$botslog\n$line");
    /* We'll also create/update  file that records the last bot to visit the site.  Why? See below */
    file_put_contents($lastbotlog, $hostname);
    /* Set up the relevant 404 message */
    $htmlMessage = $botMessage;
    $sendemail = FALSE;
  }
  else
  {
    /* If $hostname is the same as the entry in bots-last.txt, it's a search engine */
    /*@$file_handle = fopen($lastbotlog, "r");
    if(!$file_handle) echo("<p>Last bot log not found.</p>");
    else
    {*/
    /* $visitor = file_get_contents($lastbotlog);
	if($hostname == $visitor)
    {
      $sendemail = FALSE;	  
	} */
  }
  
  /* Is the visitor asking for "favicon.ico"? For now, we're not intending to provide one*/
  if ($requester == "/favicon.ico") $sendemail = FALSE;

  $pos = strpos($remoteHost, "wise-guys.nl");
  if($pos === FALSE){}
  else $sendemail = FALSE;

  
  /* The following section sends an email =if= there really looks to be a broken link 
      that we need to know about */
  if($sendemail)
  {
    /* Note: $to, $subject and $message are set in the ini file */
    /* First we need to make the substitutions */
    $substitutions = array("requester" => $requester, "remoteAddr" => $remoteAddr, "hostname" => $hostname, "referer" => $referer, "remoteUser" => $remoteUser);
    // Substitute any placeholders
    foreach($substitutions as $key => $replacement) $message = str_replace('{{'.$key.'}}', $replacement, $message); 
    $message = wordwrap($message, 70, "\r\n");
    mail($to, $subject, $message);
  }
  else 
  {
    /* If we're not sending an email, let's record the issue in a log.  It will get =BIG= 
	   * but I want to know for now... */
    $line = '"'.date("d/m/Y").'","'.strftime("%T").'","'.$hostname.'","'.$remoteAddr.'","'.$requester.'","'.$referer."\"\n";
    file_put_contents($notfoundlog, $line, FILE_APPEND);
  }

  /* Now stream the html for the 404 page */
  include("trimsite/webpage.class.php");
  $template = new webpage();

  /* Now we can stream our initial template code */
  echo ($template->render("TOP"));
  /* Followed by the message */
  /* First we need to make the substitutions */
  $substitutions = array("mailto" => $to);
  // Substitute any placeholders
  foreach($substitutions as $key => $replacement) $htmlMessage = str_replace('{{'.$key.'}}', $replacement, $htmlMessage); 
  echo ($htmlMessage);
  /* Now stream the final template code */
  echo $template->render("BOTTOM");
/**---------------------------------------------
 *             End of File
 *----------------------------------------------
 */
?>

