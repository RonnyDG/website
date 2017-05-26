<?php
/**
 * brochures.php
 *
 * It instantiates our class, webpage, and calls the method that returns the initial 
 * html for the top of our page.  The main centre section of this file makes space to 
 * stream the page content.  Finally, it calls the method that returns the final html 
 * of our boilerplate code.
 * 
 * @author David Argles <d.argles@gmx.com>
 * @version 14-04-2017, 16:31h
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

		<h3>Brochures</h3>

		<p>There&#8217;s a number of Minisail brochures that have existed over the years.  They can be helpful in getting background ideas and information about the boat and the class.  Here is a collection of various leaflets, fliers and pictures &#8211; but don&#8217;t forget, things like the contact details etc. have long since ceased to be valid.</p>
		
    <ul>
      <!-- li><a href="brochures/Minisail-leaflet2.pdf">Minisail sales booklet</a> (pdf)</li -->
      
      <li><a href='brochures/Minisail-Details.jpg'>Minisail Details</a> (jpg)</li>
				
			<li><a href='brochures/Minisprint-Details.jpg'>Minisprint Details</a> (jpg)</li>
				
			<li><a href='brochures/EarlyMinisail.png'>Early Minisail</a> (png)</li>

      <li>The Minisail was also sold in America, courtesy of George O&#8217;Day.  Here&#8217;s a copy of a <a href="brochures/Mini-Sail-Ad.pdf">Mini Sail Ad</a> of his.</li>
      <li><a href="brochures/Minisail-6ties_V1.pdf">a 6ties brochure about flushed decked wooden and Polyester Minisails</a> (thanks to Steven Cattle)</li>
      <li><a href="brochures/Minisail-Adverts.pdf">Minisprint Adverts</a> from the 7ties (thanks to Stephen Booy)</li>
      <li><a href="brochures/Richmond-Marine.pdf">Richmond Marine</a>&#8216;s fleet brochure from the 7ties (thanks to Stephen Booy)</li>
      <li><a href="brochures/Minisail%20Brochures%20Smaller-2.pdf">A collection of brochures</a>, some unseen material &#8211; for most of us- here. (thanks to Stephen Booy)</li>
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

