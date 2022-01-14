<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-33215112-2', 'auto');
  ga('send', 'pageview');

</script>
<title>Dr. Peter Bradley - Turing Machines / Flash</title>
<script type="text/javascript" language="JavaScript"><!--
function RemoveContent(d) {
document.getElementById(d).style.display = "none";
var myAnchor = d + "Anchor";
document.getElementById(myAnchor).style.display = "";
}
function InsertContent(d) {
document.getElementById(d).style.display = "";
var myAnchor = d + "Anchor";
document.getElementById(myAnchor).style.display = "none";
}
//--></script>

<link href="../CSS/dist.css" rel="stylesheet" type="text/css" />
</head>

<body>

<h1>Turing Machines in Flash</h1>
  <script type="text/javascript">
    google_ad_client = "ca-pub-3266971657070463";
    google_ad_slot = "3353676104";
    google_ad_width = 728;
    google_ad_height = 90;
</script>
<!-- Turing machines header -->
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<table align="center" cellpadding="2" cellspacing="0" border="0">
<tr><td align="left">
<p>I've been writing little flash-based turing machines for a few years, but until now, they have only been available through the <a href="http://inquiry.mcdaniel.edu/">Inquiry site</a> interface. Here they are reproduced for common use. All are covered by Creative Commons-share alike license.</p>
<p><a href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" border="0"/></a></p>
</td>
<td align="right" valign="top"  style="width: 200px; border: 1px solid #000000;" rowspan="2">
<?php 
$myInfo = "../../kaley-bradley.com/McDaniel/faculty/bradley.inc";
  $f = fopen($myInfo, 'r');
  //print($f);
    while (!feof($f)) {
        $content .= fgets($f, 4096);
     }
  fclose($f); 
  print $content;
?>
<script type="text/javascript">
    google_ad_client = "ca-pub-3266971657070463";
    google_ad_slot = "6307142506";
    google_ad_width = 300;
    google_ad_height = 600;
</script>
<!-- Turing machines sidebar -->
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</td></tr>
<tr><td>
<table width="95%" cellspacing="0" cellpadding="0">
<tr><td class="tableHead" style="width: 30px;">&nbsp;</td><td class="tableHead">Item</td>
<td class="tableHead">&nbsp;MacOSX&nbsp;</td><td class="tableHead">&nbsp;WinEXE&nbsp;</td><td class="tableHead">&nbsp;HTML&nbsp;</td><td class="tableHead">&nbsp;FLA&nbsp;</td></tr>
<tr><td>&nbsp;</td>
<td><p class="objectTitle"><strong>The Tower of Hanoi <a href="javascript:InsertContent('towerDescription')">show</a></strong><span id="towerDescriptionAnchor" class="descriptionAnchor" style="display: none;"><a href="javascript:InsertContent('towerDescription')"> description</a></span></p>
  <div id="towerDescription" class="description">The classic problem used to demonstrate recursive functions. To solve it, one has to notice that moving X number of blocks, one must move X-1 number of blocks to an 'alternate' post, move the Xth block to the 'target' post and then move X-1 blocks from the alternate post to the target post. Thus, we write a function that calls itself with X-1 blocks and the alternate post as arguments, then moves the Xth block, and calls itself again with X-1 blocks and the alternate post as the 'source' post. If you want to learn more, visit <a href="http://inquiry.mcdaniel.edu/mindproject/getMod.php?mod_id=538">Inquiry: Recursive Functions</a>. <a href="javascript:RemoveContent('towerDescription')">
hide description</a></div></td>
    <td class="clickMe"><a href="MacOSX/towerOfHanoi.app.zip"><img src="images/MacOSX.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="WinEXE/towerOfHanoi.exe"><img src="images/WinEXE.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="HTML/towerOfHanoi.html"><img src="images/Firefox.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="FLA-source/towerOfHanoi.fla"><img src="images/FLA.jpg" border="0" /></a></td>
</tr>
<tr><td>&nbsp;</td><td><p class="objectTitle"><strong>Soda Machine</strong> <span id="sodaMachineDescriptionAnchor" class="descriptionAnchor" style="display: none;"><a href="javascript:InsertContent('sodaMachineDescription')">show description</a></span></p>
  <div id="sodaMachineDescription" class="description">The basic soda machine used to introduce the idea of machine tables. From the description given in Putnam 1967 <a href="javascript:RemoveContent('sodaMachineDescription')">
hide description</a></div></td>
    <td class="clickMe"><a href="MacOSX/sodaMachine.app.zip"><img src="images/MacOSX.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="WinEXE/sodaMachine.exe"><img src="images/WinEXE.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="HTML/sodaMachine.html"><img src="images/Firefox.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="FLA-source/sodaMachine.fla"><img src="images/FLA.jpg" border="0" /></a></td>
</tr>
<tr><td>&nbsp;</td>
<td><p class="objectTitle"><strong>Machine Table 1</strong> <span id="machineTable1Anchor" class="descriptionAnchor" style="display: none;"><a href="javascript:InsertContent('machineTable1')">show description</a></span></p>
  <div id="machineTable1" class="description">Building the machine table for the soda machine: introductory layout. <a href="javascript:RemoveContent('machineTable1')">
hide description</a></div></td>
    <td class="clickMe"><a href="MacOSX/machineTable1.app.zip"><img src="images/MacOSX.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="WinEXE/machineTable1.exe"><img src="images/WinEXE.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="HTML/machineTable1.html"><img src="images/Firefox.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="FLA-source/machineTable1.fla"><img src="images/FLA.jpg" border="0" /></a></td>
</tr>
<tr><td>&nbsp;</td>
<td><p class="objectTitle"><strong>Machine Table 1b</strong> <span id="machineTable1bAnchor" class="descriptionAnchor" style="display: none;"><a href="javascript:InsertContent('machineTable1b')">show description</a></span></p>
  <div id="machineTable1b" class="description">Building the machine table for the soda machine: 1st step, specify output for $1 input. <a href="javascript:RemoveContent('machineTable1b')">
hide description</a></div></td>
    <td class="clickMe"><a href="MacOSX/machineTable1b.app.zip"><img src="images/MacOSX.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="WinEXE/machineTable1b.exe"><img src="images/WinEXE.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="HTML/machineTable1b.html"><img src="images/Firefox.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="FLA-source/machineTable1b.fla"><img src="images/FLA.jpg" border="0" /></a></td>
</tr>
<tr><td>&nbsp;</td>
<td><p class="objectTitle"><strong>Machine Table 2</strong> <span id="machineTable2Anchor" class="descriptionAnchor" style="display: none;"><a href="javascript:InsertContent('machineTable2')">show description</a></span></p>
  <div id="machineTable2" class="description">Building the machine table for the soda machine: 2nd step, notice that we need a way of keeping track of an input of 50c. We do so by adding an internal 'state'. <a href="javascript:RemoveContent('machineTable2')">
hide description</a></div></td>
    <td class="clickMe"><a href="MacOSX/machineTable2.app.zip"><img src="images/MacOSX.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="WinEXE/machineTable2.exe"><img src="images/WinEXE.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="HTML/machineTable2.html"><img src="images/Firefox.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="FLA-source/machineTable2.fla"><img src="images/FLA.jpg" border="0" /></a></td>
</tr>
<tr><td>&nbsp;</td>
<td><p class="objectTitle"><strong>Machine Table 3</strong> <span id="machineTable3Anchor" class="descriptionAnchor" style="display: none;"><a href="javascript:InsertContent('machineTable3')">show description</a></span></p>
  <div id="machineTable3" class="description">Building the machine table for the soda machine: specifying the transition to state 2 when input of 50c in state 1. <a href="javascript:RemoveContent('machineTable3')">
hide description</a></div></td>
    <td class="clickMe"><a href="MacOSX/machineTable3.app.zip"><img src="images/MacOSX.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="WinEXE/machineTable3.exe"><img src="images/WinEXE.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="HTML/machineTable3.html"><img src="images/Firefox.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="FLA-source/machineTable3.fla"><img src="images/FLA.jpg" border="0" /></a></td>
</tr>
<tr><td>&nbsp;</td>
<td><p class="objectTitle"><strong>Machine Table 4</strong> <span id="machineTable4Anchor" class="descriptionAnchor" style="display: none;"><a href="javascript:InsertContent('machineTable4')">show description</a></span></p>
  <div id="machineTable4" class="description">Building the machine table for the soda machine: completing the table. State 2 50c input yields soda. State 2 $1 input yields Soda and 50c. Both return to state 1. <a href="javascript:RemoveContent('machineTable4')">
hide description</a></div></td>
    <td class="clickMe"><a href="MacOSX/machineTableTemplate.app.zip"><img src="images/MacOSX.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="WinEXE/machineTableTemplate.exe"><img src="images/WinEXE.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="HTML/machineTableTemplate.html"><img src="images/Firefox.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="FLA-source/machineTableTemplate.fla"><img src="images/FLA.jpg" border="0" /></a></td>
</tr>
<tr><td colspan="6" class="tableSubHead"><h3 align="center">Additional Flash-based tools - The actual machines. (1) The shared lib that runs all the TM Machines</h3></td></tr>
<tr><td>&nbsp;</td>
<td><p class="objectTitle"><strong>Turing Machine Shared Lib</strong> <span id="turingMachineSharedLibAnchor" class="descriptionAnchor" style="display: none;"><a href="javascript:InsertContent('turingMachineSharedLib')">show description</a></span></p>
  <div id="turingMachineSharedLib" class="description">This is the shared library for all that follows. It MUST be downloaded and installed in a directory called 'Centre/' for ANY of the following to work. <a href="javascript:RemoveContent('turingMachineSharedLib')">
hide description</a></div></td>
    <td class="clickMe"><a href="HTML/TMSharedLib.swf"><img src="images/MacOSX.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="HTML/TMSharedLib.swf"><img src="images/WinEXE.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="HTML/TMSharedLib.swf"><img src="images/Firefox.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="HTML/TMSharedLib.swf"><img src="images/FLA.jpg" border="0" /></a></td>
</tr>
<tr><td colspan="6" class="tableSubHead"><h3 align="center">Additional Flash-based tools - The actual machines. They ALL require the shared LIB!</h3></td></tr>
<tr><td>&nbsp;</td>
<td><p class="objectTitle"><strong>Turing Machine Add</strong> <span id="TMAddAnchor" class="descriptionAnchor" style="display: none;"><a href="javascript:InsertContent('TMAdd')">show description</a></span></p>
  <div id="TMAdd" class="description">A Turing Machine that will add two numbers together. Numbers are represented by a '0' followed by some number of '1's, so that '011' = 2. <a href="javascript:RemoveContent('TMAdd')">
hide description</a></div></td>
    <td class="clickMe"><a href="MacOSX/SharedTMAdd.app.zip"><img src="images/MacOSX.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="WinEXE/SharedTMAdd.exe"><img src="images/WinEXE.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="HTML/SharedTMAdd.html"><img src="images/Firefox.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="FLA-source/SharedTMAdd.fla"><img src="images/FLA.jpg" border="0" /></a></td>
</tr>
<tr><td>&nbsp;</td>
<td><p class="objectTitle"><strong>Turing Machine Successor</strong>   <span id="TMSuccessorAnchor" class="descriptionAnchor" style="display: none;"><a href="javascript:InsertContent('TMSuccessor')">show description</a></span></p>
  <div id="TMSuccessor" class="description">A Turing Machine that will calculate the successor of a number represented by the number of 1s following a 0 (i.e. 011 = 2) in a new location on the tape. From Kleene, 1967. <a href="javascript:RemoveContent('TMSuccessor')">
hide description</a></div></td>
    <td class="clickMe"><a href="MacOSX/SharedTMSuccessor.app.zip"><img src="images/MacOSX.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="WinEXE/SharedTMSuccessor.exe"><img src="images/WinEXE.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="HTML/SharedTMSuccessor.html"><img src="images/Firefox.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="FLA-source/SharedTMSuccessor.fla"><img src="images/FLA.jpg" border="0" /></a></td>
</tr>
<tr><td colspan="6" class="tableSubHead"><h3 align="center">Additional Flash-based tools - The Universal machines. They ALL require the shared LIB!</h3></td></tr>
<tr><td>&nbsp;</td>
<td><p class="objectTitle"><strong>Turing Machine Binary Count</strong> <span id="TMBinaryAnchor" class="descriptionAnchor" style="display: none;"><a href="javascript:InsertContent('TMBinary')">show description</a></span></p>
  <div id="TMBinary" class="description">A Turing Machine that 'count' in binary. That is, it will write the binary numbers in sequence on the tape, and return to the leftmost square on the tape when each number is completed. Notice: the machine writes the numbers backwards, so '01' = '10' and '001' = '100'. Machine specification from Minsky, 1967, p 137-154. <a href="javascript:RemoveContent('TMBinary')">
hide description</a></div></td>
    <td class="clickMe"><a href="MacOSX/SharedTMSimple.app.zip"><img src="images/MacOSX.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="WinEXE/SharedTMSimple.exe"><img src="images/WinEXE.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="HTML/SharedTMSimple.html"><img src="images/Firefox.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="FLA-source/SharedTMSimple.fla"><img src="images/FLA.jpg" border="0" /></a></td>
</tr>
<tr><td>&nbsp;</td>
<td><p class="objectTitle"><strong>Turing Machine Universal Setup 1</strong> <span id="TMUniversial1Anchor" class="descriptionAnchor" style="display: none;"><a href="javascript:InsertContent('TMUniversial1')">show description</a></span></p>
  <div id="TMUniversial1" class="description">Building the universal machine: extend the tape infinitely to the left to hold the instructions, and mark the 'middle' point with a 'Y'. Designate the two squares immediately to the left of the 'Y' to hold the current state of the machine and the last number read from the tape. Machine specification from Minsky, 1967, p 137-154. <a href="javascript:RemoveContent('TMUniversial1')">
hide description</a></div></td>
    <td class="clickMe"><a href="MacOSX/SharedTMUniversalSetup1.app.zip"><img src="images/MacOSX.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="WinEXE/SharedTMUniversalSetup1.exe"><img src="images/WinEXE.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="HTML/SharedTMUniversalSetup1.html"><img src="images/Firefox.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="FLA-source/SharedTMUniversalSetup1.fla"><img src="images/FLA.jpg" border="0" /></a></td>
</tr>
<tr><td>&nbsp;</td>
<td><p class="objectTitle"><strong>Turing Machine Universal Setup 2</strong> <span id="TMUniversial2Anchor" class="descriptionAnchor" style="display: none;"><a href="javascript:InsertContent('TMUniversial2')">show description</a></span></p>
  <div id="TMUniversial2" class="description">Building the universal machine: specify the starting condition for this tape: state 0, last symbol read '1'. Machine specification from Minsky, 1967, p 137-154 <a href="javascript:RemoveContent('TMUniversial2')">
hide description</a></div></td>
    <td class="clickMe"><a href="MacOSX/SharedTMUniversalSetup2.app.zip"><img src="images/MacOSX.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="WinEXE/SharedTMUniversalSetup2.exe"><img src="images/WinEXE.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="HTML/SharedTMUniversalSetup2.html"><img src="images/Firefox.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="FLA-source/SharedTMUniversalSetup2.fla"><img src="images/FLA.jpg" border="0" /></a></td>
</tr>
<tr><td>&nbsp;</td>
<td><p class="objectTitle"><strong>Turing Machine Universal</strong> <span id="TMUniversialAnchor" class="descriptionAnchor" style="display: none;"><a href="javascript:InsertContent('TMUniversial')">show description</a></span></p>
  <div id="TMUniversial" class="description">The working universal machine. The instructions are loaded onto the tape from right to left in to the left of the last-number-read block. The computational area is marked off with an 'M'. If you are interested, there is a description of how we encoded the machine table into binary as well the states the universal machine goes through at the <a href="http://inquiry.mcdaniel.edu/mindproject/getMod.php?mod_id=218">Inquiry project: Universal Turing Machines</a>. Machine specification from Minsky, 1967, p 137-154. <a href="javascript:RemoveContent('TMUniversial')">
hide description</a></div></td>
    <td class="clickMe"><a href="MacOSX/SharedTMUniversal.app.zip"><img src="images/MacOSX.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="WinEXE/SharedTMUniversal.exe"><img src="images/WinEXE.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="HTML/SharedTMUniversal.html"><img src="images/Firefox.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="FLA-source/SharedTMUniversal.fla"><img src="images/FLA.jpg" border="0" /></a></td>
</tr>
<tr><td colspan="6" class="tableSubHead"><h3 align="center">Additional Flash-based tools - The Natural Language machines. These do NOT require the shared lib</h3></td></tr>
<tr><td>&nbsp;</td>
<td><p class="objectTitle"><strong>Turing Machine Natural Language 1</strong> <span id="TMNatural1Anchor" class="descriptionAnchor" style="display: none;"><a href="javascript:InsertContent('TMNatural1')">show description</a></span></p>
  <div id="TMNatural1" class="description">Inspired by a illustrative example used by Pinker in his 1995 book The Language Instinct, I decided to create a Turing machine to implement the English question-form based on verb-movement: we can turn a declarative sentence like &quot;The rose is in the vase&quot; into a question by moving the verb to the front of the sentence: &quot;Is the rose in the vase?&quot; This machine takes words as its inputs, matches them to a database of known words categorized as grammatical parts of speech, and then uses those classifications to execute actions according to its machine table. Can you create a sentence that it cannot parse correctly?<a href="javascript:RemoveContent('TMNatural1')">
hide description</a></div></td>
    <td class="clickMe"><a href="MacOSX/SimpleParser0.app.zip"><img src="images/MacOSX.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="WinEXE/SimpleParser0.exe"><img src="images/WinEXE.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="HTML/SimpleParser0.html"><img src="images/Firefox.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="FLA-source/SimpleParser0.fla"><img src="images/FLA.jpg" border="0" /></a></td>
</tr>
<tr><td>&nbsp;</td>
<td><p class="objectTitle"><strong>Turing Machine Natural Language 2</strong> <span id="TMNatural2Anchor" class="descriptionAnchor" style="display: none;"><a href="javascript:InsertContent('TMNatural2')">show description</a></span></p>
  <div id="TMNatural2" class="description">There are a number of ways in which the last will fail, the most obvious of which is its inability to handle verb or noun phrases. This one, which contains in internal 'template' of the structure of grammar (i.e. Chomsky) handles these better. Can you break it now? <a href="javascript:RemoveContent('TMNatural2')">
hide description</a></div></td>
    <td class="clickMe"><a href="MacOSX/SimpleParser.app.zip"><img src="images/MacOSX.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="WinEXE/SimpleParser.exe"><img src="images/WinEXE.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="HTML/SimpleParser.html"><img src="images/Firefox.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="FLA-source/SimpleParser.fla"><img src="images/FLA.jpg" border="0" /></a></td>
</tr>
<tr>
<td>&nbsp;</td><td><p class="objectTitle"><strong>Turing Machine Natural Language 3</strong> <span id="TMNatural3Anchor" class="descriptionAnchor" style="display: none;"><a href="javascript:InsertContent('TMNatural3')">show description</a></span></p>
  <div id="TMNatural3" class="description">The last one couldn't handle clauses: it would turn the sentence &quot;The rose that is in the vase is on the table&quot; into &quot;Is the rose that in the vase is on the table&quot;, a mistake that Chomskians tell us a normal human would never make. This machine handles clauses by blocking them off an inserting them in at the end. <a href="javascript:RemoveContent('TMNatural3')">
hide description</a></div></td>
    <td class="clickMe"><a href="MacOSX/SimpleParser1.app.zip"><img src="images/MacOSX.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="WinEXE/SimpleParser1.exe"><img src="images/WinEXE.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="HTML/SimpleParser1.html"><img src="images/Firefox.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="FLA-source/SimpleParser1.fla"><img src="images/FLA.jpg" border="0" /></a></td>
</tr>
<tr><td>&nbsp;</td>
<td><p class="objectTitle"><strong>Turing Machine Natural Language - recursive</strong> <span id="TMNaturalRAnchor" class="descriptionAnchor" style="display: none;"><a href="javascript:InsertContent('TMNaturalR')">show description</a></span></p>
  <div id="TMNaturalR" class="description">This final machine handles clauses correctly: as mini-sentences. Thus, when it hits a clause, it starts its processing over, creating a new grammatical tree. Now: Can you break it? <a href="javascript:RemoveContent('TMNaturalR')">
hide description</a></div></td>
    <td class="clickMe"><a href="MacOSX/SimpleParser1recursive.app.zip"><img src="images/MacOSX.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="WinEXE/SimpleParser1recursive.exe"><img src="images/WinEXE.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="HTML/SimpleParser1recursive.html"><img src="images/Firefox.jpg" border="0" /></a></td>
    <td class="clickMe"><a href="FLA-source/SimpleParser1recursive.fla"><img src="images/FLA.jpg" border="0" /></a></td> 
</tr>
</table>
 <p><a href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" border="0"/></a></p>

<h2>Additional Resources</h2>
<p>The flash movies above are embedded into modules that are distributed via the 'mind project'. If you would like to read a 'textbook' introduction to Turing machines:</p>
<a href="http://inquiry.mcdaniel.edu/mindproject/getMod.php?mod_id=13">Introduction to symbolic models</a>
<ol>
<li class="bulletPoints"><a href="http://inquiry.mcdaniel.edu/mindproject/getMod.php?mod_id=163"><a href="http://inquiry.mcdaniel.edu/mindproject/getMod.php?mod_id=538">Recursive Functions</a></a></li>
<li class="bulletPoints"><a href="http://inquiry.mcdaniel.edu/mindproject/getMod.php?mod_id=163">Introduction to Machine Tables</a></li>
<li class="bulletPoints"><a href="http://inquiry.mcdaniel.edu/mindproject/getMod.php?mod_id=159">Turing Machines</a></li>
<li class="bulletPoints"><a href="http://inquiry.mcdaniel.edu/mindproject/getMod.php?mod_id=218">Universal Turing Machines</a></li>
<li class="bulletPoints"><a href="http://inquiry.mcdaniel.edu/mindproject/getMod.php?mod_id=443">Turing Machines and the Natural Language</a></li>
<li class="bulletPoints"><a href="http://inquiry.mcdaniel.edu/mindproject/getMod.php?mod_id=160">The Turing Test</a></li>
</ol>
<h2>Works Cited:</h2>
<p>Putnam, Hilary. (1960). &quot;Minds and Machines&quot;. Reprinted in Putnam (1975) <em>Mind, Language, and Reality</em>. Cambridge: CUP.</p>
<p>Minsky 1967 <em>Computation: finite and infinite machines</em> Upper Saddle River, NJ: Prentice Hall</p>
<p> Kleene 1967 <em>Mathematical Logic</em> New York: Wiley</p>
<p>Pinker 1995 <em>The Language Instinct: How the Mind Creates Language</em>. Harper Perennial Modern Classics</p>
<p><a href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" border="0"/></a></p>
</td></tr></table>
</body>
</html>
