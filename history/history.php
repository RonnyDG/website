<?php
/**
 * yearbook.php
 *
 * It instantiates our class, webpage, and calls the method that returns the initial 
 * html for the top of our page.  The main centre section of this file makes space to 
 * stream the page content.  Finally, it calls the method that returns the final html 
 * of our boilerplate code.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 13-04-2017, 21:06h
 * @copyright 2017 Haven Consulting
 */

  /* The next two lines bring in the webpage class and create a new instance.
     Don't change these lines! */
  include("../trimsite/webpage.class.php");
  $template = new webpage("");
 
  /* Now we can stream our initial template code */
  echo $template->render("TOP");
?>
        <!-- The main page content follows.  You can change this as you wish -->

		<h3>History</h3>

		<p>This section of our website contains anything that relates to the history of the Minisail.  There&#8217;s quite a lot, and it&#8217;s useful to separate it out from current documents and resources.  At the moment, it&#8217;s useful to see what the Minisail class rules used to be, but we have had to update them, so you need to know the difference!</p>
<p>This area begins with a <a title="History of the MiniSail" href="minisail-history.php">history of the Minisail</a>, taken from the 1976 year book, written by David Thorpe, who was there at the start of things.</p>


        <!-- End of main page content -->
<?php
  /* Now we stream our final boilerplate code */
  echo $template->render("BOTTOM");
/**---------------------------------------------
 *             End of File
 *----------------------------------------------
 */
?>

