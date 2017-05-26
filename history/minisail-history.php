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
      
        <p><em>The following article is taken from the 1976 MiniSail Year Book:</em></p>
<h3>MINISAIL 1959-75</h3>
<p>As an idea, the Minisail is not original. It was two Americans who first had the idea of putting a sail on a surfboard. Their boat was called the Sailfish and their company, Alcort, became one of the largest small boat companies in the USA. It was in 1959 when Ian Proctor, as a yachting correspondent for the Daily Telegraph, was in the USA to report the Sceptre America&#8217;s Cup series that the idea of an English Minisail was born. I was then working for Westinghouse Electrical International Corporation in New York and Ian and I spent quite a lot of time together. I said that we should have a Sailfish in England, and he said he would design one. Not much happened for some time after I returned to the UK to rejoin General Electric Company but, at the end of 1960, Ian telephoned me to say that he had completed the design and would prefer to have the prototype built by Chippendale who was conveniently to hand at Emsworth. I remember the sensation of sailing the prototype with its rapid acceleration was very different to sailing any other dinghy. Chippendale was very enthusiastic and wanted to produce Minisails and eventually three builders, Chippendale, Bossom&#8217;s Boatyard at Oxford and Plycraft in Somerset were licensed to produce the first Minisails which were not only timber built with the same hull shape as the existing fibreglass Minisail but they had flat decks and no cockpit.</p>
<p>By 1962, Chippendale, Bossoms and Plycraft dropped out of the picture and by 1963 the first fibreglass boats were produced. Eight were presented to HMS Devonshire, a guided missile cruiser, and described as the &#8220;finest piece of sports equipment the ship had ever had&#8221;. Philip Saul and I had fitted the plank from his daughter&#8217;s see-saw across the deck of his boat and the first non-sliding seat was born. I remember being overtaken by a Flying Dutchman but that the difference in speed was not as much as the latter boat would have liked! The first championship race was held at Canvey Island and we had great difficulty getting our daggerboards unstuck from Canvey Island&#8217;s special variety of mud.</p>
<p>At a meeting, the Class Association was formed with Philip Saul as Hon. Secretary, but the Minisail had not really penetrated any sailing clubs; for one thing single-handed sailing was not particularly popular and the Minisail itself was, of course, originally designed for two people. In its standard form it is still sold as a boat fro one or two people and an excellent fun boat it is.</p>
<p>The point of Philip Saul&#8217;s seat was that he found sailing it single-handed, he needed more power to sit it up in Thames Estuary conditions. Perhaps it was because the boat was such fun sailing single-handed in a breeze that people did not have to race it in order to get pleasure.</p>
<p>In the same way that the Sailfish evolved into the Sunfish with a centre cockpit and more comfort, so a cockpit version of the Minisail was devised. As we almost simultaneously produced a flat bottomed version for easy construction in timber, we had four models we had difficulty distinguishing between them.</p>
<p>Incidentally, we did, in 1962, also produce a kit for the original wood Minisail with its flat deck and V bottomed hull shape, so if some early boats exist which are not built to the Bossoms/Chippendale/Plycraft standard, it might well be that they were customer assembled!</p>
<p>No history of the boat is complete without a mention of Michael Laws. Mike was the original mover of the Minisail at Brighton and he was responsible for the early racing of the Minisail at Brighton Sailing Club. He was a manager at Richmond Marine when it was at its Sheen Lane premises. He died in 1970 of leukaemia. He had learnt to sail in a Minisail and his enthusiasm for it was infectious and, no matter what, he was always cheerful and courageous. The cup which Richmond Marine presented in 1974 to the Class is, therefore, inscribed the Mike Laws Trophy.</p>
<p>It was in December 1973 that a small band of Minisail brothers, notably John Burgess, descended on a Richmond Marine standard Minisail and turned it into what was known as the MiniSprint Mk1, with a stiff boom and tuned rig. Apart from the tracked boom, the tuning was what had become standard in the Class but the availability of a standard Minisail ready to race was obviously appreciated. MiniSprint Mk1 did sufficiently well that in 1974 Ian Proctor was asked to produce an entirely new deck arrangement on the MiniSprint Mk1 for single-handed racing only. Freeboard was increased to eliminate drag of the sliding seat and steps were retracted by making the rear deck self draining again, although the configuration was completely different from that of the original MiniSail. An integral bridge deck for the sliding seat was built in to keep weight down and a change in the Class rules permitted the use of a centreboard. The opportunity was taken to correct some hollows and concavities that had crept into the MiniSail hull and the new boat was a great success at the 1975 Boat Show. It would be interesting to place a MiniSprint Mk11 alongside the original MiniSail and to see the extent to which Ian Proctor&#8217;s various MiniSail designs have almost gone round in a circle. Each one of them has filled a need at a particular time and, in this writer&#8217;s view, each one is a design classic, perfect both visually and in function. We can certainly see no reason now to make any changes from the existing glassfibre MiniSail as a sporting fun boat or from the MiniSprint Mk11 as an out and out single-handed racing dinghy for serious competition.</p>
<p align="LEFT">David Thorpe, 1976</p>

        <!-- End of main page content -->
<?php
  /* Now we stream our final boilerplate code */
  echo $template->render("BOTTOM");
/**---------------------------------------------
 *             End of File
 *----------------------------------------------
 */
?>

