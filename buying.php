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
 * @version 26-05-2017, 22:41h
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
      
		<h3>Buying and Selling</h3>
		<p>This page is primarily designed to help you to understand what you've got 
		  if you're selling, and what to look out for if you're buying.</p>

		<h4>Selling</h4>
		<p>If you want some tips on selling a Minisail, then it's not a bad idea to read the following 
		  tips on what to consider when buying one!  If you know what folk are looking for then it 
		  should help you to understand how to come to a fair agreement that both buyer and 
		  seller are happy with.</p>
		
		<h4>Buying Tips</h4>
		
		<p>Perhaps the first question that folk want to talk about regarding buying and selling is, How 
		  much is this Minisail worth? That's a really difficult question to answer in the case of 
		  the Minisail, because at the moment, it's something of a forgotten oddity.  That means that 
		  prices are typically low, and you're just as likely to find a magnificent example going for 
		  a hundred or two or less as you are to find a massive restoration job for much the same 
		  price.</p>

<p>If you fancy the challenge of restoring a Minisail, then we'd love to encourage you to rescue an otherwise lost cause, and to keep the boats on the water.  However, bear in mind that this will be costly, and at the moment, there is no chance that you'll get your investment back if you want to sell again soon after. I recently went shopping for a new pulley block, and discovered that it's possible to pay almost as much as the purchase price of an entire Minisail complete with all running gear!</p>

<p>The plastic version of the Minisail is a GRP boat, unlike the Topper which followed it.  There are a few issues which follow from this. Have a good look for knocks and cracks, although minor holes and blemishes are easy to repair simply because it's GRP. More major damage could be a greater challenge. Another issue relates to the fact that the hull can develop concavities; some versions of the hull are more prone to such depressions than others.</p>

<p>With wood, the usual issues apply. Look out for rot, especially if the hull has been standing outside for a while. The fact that the hull is basically a fully-enclosed over-sized surfboard means that it can be difficult to know what's going on inside; this is true of the GRP hull as well as the wooden one. Some folk fit inspection hatches so they can check on the inside; if there are none, there may not be a problem, but it's a bit of a lottery knowing what's going on.</p>

<p>Have a good look at the running gear (blocks, sheets, etc).  If anything is missing, it can be replaced, but it is quite possible that the replacement cost will be more than the purchase price of the boat. On the other hand, you end up with really nice equipment.</p>

<p>Structural stuff like the centreplate, rudder, mast halves or boom are often missing on boats for sale.  These can be replaced, but again, remember that this will significantly increase the cost of the boat. Another thing to remember here is that other owners are often very happy to help out. Ask on Facebook or on the forum, but think carefully before buying.</p>

<p>The sail is likely to be a little tired. If you just want to get out on the water, this may not be a problem.  If you want to get serious and splash out on a new one, there is a company that is making Minisail sails again for a very reasonable price - just ask on the forum for the details.</p>

<p>Another issue concerns the type of Minisail. There's a whole section here showing different examples of the Minisail, but basically, you need to decide what you think you want.  Or get in touch and arrange to see an example or two, or better, come along to a meeting and try a few different examples out. Views vary, but some reckon that the Monaco with a cockpit is good for inland sailing and cruising, whilst the open-transomed Sprint is good for sea sailing and especially for launching in surf, for example. Personally, I like the pivoting centreplate on the Sprint.</p>

<p>At the end of the day, its going to be down to what you reckon you want, and how badly you want it. Against that is the issue of how badly the current owner wants to get rid of their Minisail if they need the space and it's got to go.</p>

<p>The basic message here is that, if there's a choice, a complete, ready-to-sail boat is going to save a lot of time and money, at least in the initial stages.</p>
    

        <!-- End of main page content -->
<?php
  /* Now we stream our final boilerplate code */
  echo $template->render("BOTTOM");
/**---------------------------------------------
 *             End of File
 *----------------------------------------------
 */
?>

