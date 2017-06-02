<?php
/**
 * examplePage.php is the example page for our website
 *
 * It instantiates our class, webpage, and calls the method that returns the initial 
 * html for the top of our page.  The main centre section of this file makes space to 
 * stream the page content.  Finally, it calls the method that returns the final html 
 * of our boilerplate code.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 29-03-2017, 17:07h
 * @copyright 2017 Haven Consulting
 */

  /* The next two lines bring in the webpage class and create a new instance.
     Don't change these lines! */
  include("trimsite/webpage.class.php");
  $template = new webpage("");
 
  /* Now we can stream our initial template code */
  echo $template->render("TOP");
?>
        <!-- The main page content follows.  You can change this as you wish -->
      
        <!-- p><i>[Please note: our webserver has gone down!  We're working to get things up again as quickly as possible.  In the meantime, if you have any questions, the best way to keep in touch is via our <a href="https://www.facebook.com/groups/minisail/">Facebook group</a>.]</i></p -->

    <h3>The Minisail Class Association</h3>

		<p>Welcome to the MiniSail Class Association website!</p>
		
    <p>The Minisail is an Ian Proctor design, Ian being a British boat designer who had his own company which produced spars. Quite a number of boats still have Proctor masts and booms. The Minisail appeared in the 1960s, although the <a title="History of the MiniSail" href="history.php">Minisail story</a> starts in 1959, it seems. It appeared in <!-- a href="https://web-beta.archive.org/web/20161002155203/http://minisail.org.uk/htdocs/minisailYearbook.php#types" -->several versions<!-- /a --> so don't be surprised if you have, or know of, a MiniSail which looks a little different from others.</p>
    
    <!-- p>There are several parts to this website.  Firstly, theres a bit about the MiniSail itself.  This section gives information about the the various versions of the boats that were produced, and hopefully will help anyone who wants to maintain, repair, race or restore a MiniSail.  Then theres also a section about the newly re-formed class association, revived to make sure that theres support for anyone whos serious about sailing, racing or maintaining their MiniSail.  Then theres also a section about events that we organise throughout the year.  Wed encourage you to join our new MiniSail forum; just click <a href="https://web-beta.archive.org/web/20161002155203/http://minisail.org.uk/?page_id=315">here</a>!</p -->

    <p>Thank you for visiting our website.  Happy MiniSailing!</p>

        <!-- End of main page content -->
<?php
  /* Now we stream our final boilerplate code */
  echo $template->render("BOTTOM");
/**---------------------------------------------
 *             End of File
 *----------------------------------------------
 */
?>

