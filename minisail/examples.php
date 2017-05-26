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
      
		<h3>Examples</h3>

		<p>As a semi-development class, there is a wide variation in the types of Minisail that can be found. Nevertheless, there is significant parity between the differing types in terms of performance. Back in the 1970s, no one style dominated the national championships.</p>

    <ul>
      <!-- li>To get us started, you might want to see a list of the <a href="examples/Versions.pdf">types of Minisail</a> that exist taken from the 1976 yearbook</li>
      <li>There's also the <a href="examples/Identification-Guide.pdf">Identification Guide</a> which Peter produced to help in the identification of the differing types.</li -->
      <li>Now let's start on some pictorial examples of some of the different types of Minisail that exist.  First, a <a href="examples/Minisail-WoodenHull.jpg">Minisail - Wooden Hull</a>.  This is a picture of the Minisail as it should be seen – racing on the water! This is a wooden example, and if you look carefully, you should see that the hull is flat-bottomed, hence the nickname, the “Flying Punt”</li>   
      <!-- li><a href="/web/20161017140243/http://minisail.org.uk/?page_id=1397" title="Early Minisail dished deck example">Early Minisail dished deck example</a></li -->
      <li><a href="examples/Homebuilt-composite-hull.jpg">Homebuilt Minisail composite hull</a>.  This is an example of a GRP hull which has been completed at home with wooden decks. The decking basically follows the plan for the Sprint, which has a long cockpit and an open transom, with a pivoting centreplate, although this example has some unique modifications.</li>
      
      <!-- li><a href="examples/GRP-Minisail-Monaco.jpg">GRP Minisail Monaco</a></li>
      <li><a href="examples/Minisail-Monaco-GRP-cockpit.jpg">Minisail Monaco with cockpit in GRP</a></li>
      <li><a href="examples/MinisailGRP-VHull.jpg">MinisailGRP-V Hull</a></li>
      <li><a href="examples/MiniSprint-mk2.jpg">MiniSprint mk2</a></li -->
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

