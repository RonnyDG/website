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
      
		<h3>The MiniSail</h3>

		<p>The Minisail was conceived in 1959 as more or less a Sailing Surfboard. It was established as a semi-development class throughout the 60s and 70s, with a number of significant variations appearing. However, it disappeared from the scene in the early 80s, leaving various examples scattered around, often seemingly abandoned. The well-known Topper is a development of the Minisail, and there are many similarities between them. However, the Minisail is much more of a racing boat at heart.</p>
		
    <p>This section begins with a collection of photographs of various examples of MiniSails, followed by some tips on buying and a page for ads if you&#8217;re selling. If you want to buy a Minisail, it might be a good idea to talk to folk on the forum before diving into an impulse purchase!</p>
    
    <p>Following this comes a collection of contacts if you need spare parts &#8211; we should now be more or less able to help you find any parts necessary to get back on the water, whatever is missing from your MiniSail!</p>
    
    <p>Finally, this area has a collection of pages giving access to a wide range of resources (build plans and the like). There is also a &#8220;Frequently Asked Questions&#8221; (FAQ).  If this still hasn&#8217;t answered your question, talk to us on <a href="http://minisail.org.uk/">Facebook</a>!</p>

        <!-- End of main page content -->
<?php
  /* Now we stream our final boilerplate code */
  echo $template->render("BOTTOM");
/**---------------------------------------------
 *             End of File
 *----------------------------------------------
 */
?>

