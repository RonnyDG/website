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
  include("../trimsite/webpage.class.php");
  $template = new webpage("");
 
  /* Now we can stream our initial template code */
  echo $template->render("TOP");
?>
        <!-- The main page content follows.  You can change this as you wish -->
      
		<h3>Resources</h3>

		<p>This page is designed to give access to whatever resources we have on the Minisail. For now, it is simply an unstructured list, and when this becomes unweildy we can see what organisation is required.</p>
<p>Note that the 1976 Handbook is unbelievably helpful for dispelling myths and misinformation that abound concerning the Minisail!</p>
<ul>
<li>The <a href="http://web.archive.org/web/20161017141912/http://argles.org/Wordpress/wp-content/uploads/2011/10/Handbook76.doc">1976 Minisail Handbook</a>. This is an extremely helpful document, containing class history, measurements and all sorts of things. This is a scan of the pages; the idea is to work on reconstructing a proper OCRd version.  There is also an <a title="Minisail Yearbook 1976" href="http://web.archive.org/web/20161017141912/http://argles.org/Wordpress/?page_id=144">HTML version of the Handbook</a> which is still incomplete, but is easier to read and search.</li>
<li>The <a href="http://web.archive.org/web/20161017141912/http://argles.org/Wordpress/wp-content/uploads/2011/10/Minisailor-Dec-1968.pdf">1968 MiniSailor Year Book</a>. This is much more of a newsletter, with some interesting photos and news items.</li>
<li>A couple of advertising broadsheets, one of the <a href="http://web.archive.org/web/20161017141912/http://argles.org/Wordpress/wp-content/uploads/2011/10/Minisail-Details.jpg">Monaco</a>, and the other of the <a href="http://web.archive.org/web/20161017141912/http://argles.org/Wordpress/wp-content/uploads/2011/10/Minisprint-Details.jpg">Minisprint mark 2</a>.</li>
<li>Steve Francis has put together a nice little <a title="Rigging Notes" href="http://web.archive.org/web/20161017141912/http://argles.org/minisail/?page_id=161">rigging diagram and a collection of photos</a> which I reckon are really helpful if you want some ideas about how to put your Minisail together.</li>
</ul>


        <!-- End of main page content -->
<?php
  /* Now we stream our final boilerplate code */
  echo $template->render("BOTTOM");
/**---------------------------------------------
 *             End of File
 *----------------------------------------------
 */
?>

