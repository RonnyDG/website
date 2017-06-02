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
      
		<h3>Spare Parts</h3>

		<p>On this page, the aim is to maintain a list of suppliers of parts for the Minisail.  Hopefully, this will be a collaborative effort, and hopefully, we&#8217;ll manage to keep it up to date.</p>
		
<table>
<tbody>
<tr>
<td> <strong>Sails</strong></p>
<ul>
  <li>Ian Morgan &#8211; Morgan Sails.  Website: <a href="https://morgansailsdotcom.wordpress.com/dinghy-classes/minisail/" target="_blank">https://morgansailsdotcom.wordpress.com/dinghy-classes/minisail/</a></li>
  <li>RJ Sails, Clevedon. Website: <a href="http://www.rjsails.co.uk/" target="_blank">http://www.rjsails.co.uk/</a></li>
</ul>
</td>
</tr>

<tr>
<td> <strong>Spars, Rudder, Daggerboard, Centreplate</strong></p>
<ul>
<li>For these sorts of items, the best thing to do is to talk to us on the Minisail forum.</li>
</ul>
</td>
</tr>

<tr>
<td> <strong>Rigging</strong></p>
<ul>
<li>For items of general rigging, such as pulley blocks, mainsheet and the like, you can visit your local chandler.  Some of the bigger companies advertise on line and can be pretty competitive on prices.  But you might want to be careful about what you buy.  For example, <a href="http://www.force4.co.uk/" target="_blank">Force4</a> sell a <a href="http://www.force4.co.uk/8367/Holt-38mm-Plain-Bearing-Block.html">Holt block suitable for 10mm mainsheet</a> for £6.50.  Or you could go for the special offer deal on the <a href="http://www.force4.co.uk/7001/Lewmar-Ocean-Snatch-Block-Size-3.html">Lewmar block</a> at just £259.95!  OK, so the Lewmar block would be way over the top, but you get the idea &#8211; you don&#8217;t need to be buying carbon-fibre/kevlar/ultra/olympic standard&#8230; whatever&#8230; to get a £100 Minisail back on the water!</li>
</ul>
</td>
</tr>
</tbody>
</table>


        <!-- End of main page content -->
<?php
  /* Now we stream our final boilerplate code */
  echo $template->render("BOTTOM");
/**---------------------------------------------
 *             End of File
 *----------------------------------------------
 */
?>

