<?php
$file = $_GET['notes'] . ".xml";
$depth = array();
$current = "none";

function startElement($parser, $name, $attrs)
{
	global $current;
   global $depth;
   for ($i = 0; $i < $depth[$parser]; $i++) {
       echo "  ";
   }
   if ($name == "SLIDE") {
   	print "\n<div class=\"slide\">";
   } else if ($name == "TEXT") {
    	print "\n\t<div class=\"textbox\">";
   }
  // echo "$name\n";
   $current = $name;
   $depth[$parser]++;
}
function elementContent($parser, $data) {
global $current;
//echo $current . "<br>";
//print strlen(trim($data));
if (strlen(trim($data)) > 0) {
switch ($current)
{
     case 'TITLE' :
          //       $this->title[$this->index]=trim($data);
                 echo "\n\t<p class=\"" . $current . "\">" . $data . "</p>";
                 break;
     case 'TEXT'    :
          //       $this->content[$this->index]=trim($data);
                 echo "\n\t<p class=\"" . $current . "\">" . $data . "</p>";
                 break;
     case 'P1'    :
          //       $this->content[$this->index]=trim($data);
                 echo "\n\t<p class=\"" . $current . "\">" . $data . "</p>";
                 break;
     case 'P2'    :
          //       $this->content[$this->index]=trim($data);
                 echo "\n\t<p class=\"" . $current . "\">" . $data . "</p>";
                 break;
     case 'C'    :
          //       $this->content[$this->index]=trim($data);
                 echo "\n\t<p class=\"" . $current . "\">" . $data . "</p>";
                 break;
     case 'IMG'	:
	 			echo "\n\t<div align=\"center\"><img src=\"HTML/" . $data . "\" width=\"50%\" height=\"50%\"></div>";
				break;
     case 'FLASH'	:
	 			echo "\n\t<div align=\"center\">
<!--url's used in the movie-->\n
<!--text used in the movie-->\n
<object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" codebase=\"http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0\" align=\"middle\">\n 
<param name=\"allowScriptAccess\" value=\"sameDomain\" />
<param name=\"movie\" value=\"HTML/" . $data . "\" />
<param name=\"quality\" value=\"high\" />
<param name=\"bgcolor\" value=\"#ffffff\" />
<embed src=\"HTML/" . $data . "\" quality=\"high\" width=\"100%\" height=\"100%\" bgcolor=\"#ffffff\" align=\"middle\" allowScriptAccess=\"sameDomain\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" />
</object></div>";
				break;
     case 'VIDEO'	:
	 $data = str_replace('Compressed/', '', $data);
	 			echo "\n\t<div align=\"center\"><!--url's used in the movie-->\n<!--text used in the movie-->\n<object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" codebase=\"http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0\" align=\"middle\">\n 
<param name=\"allowScriptAccess\" value=\"sameDomain\" />
<param name=\"movie\" value=\"HTML/" . $data . ".swf\" />
<param name=\"quality\" value=\"high\" />
<param name=\"bgcolor\" value=\"#ffffff\" />
<embed src=\"HTML" . $data . ".swf\" quality=\"high\" bgcolor=\"#ffffff\" align=\"middle\" allowScriptAccess=\"sameDomain\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" />
</object></div>";
				break;
		// <PARAM NAME=scale VALUE=exactfit>

}
}
}
function endElement($parser, $name)
{
   global $depth;
   global $current;
   $depth[$parser]--;
//print "current = " . $current . "<br>";
   if ($current == "TEXT") {
      	print "\n\t</div>";
   }
   if ($depth[$parser] == 1) {
    	print "\n</div><p class=\"slideFoot\">Slide " . $current . "</p>";
   }  // print $depth[$parser];
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Lecture Notes: <?php echo $file ?></title>
<link href="http://www2.mcdaniel.edu/pbradley/CSS/notes.css" rel="stylesheet" type="text/css">
</head>
<body>
<P class="bodyText">&nbsp;</P>
<div align="center">
<table width="600" border="0" cellspacing="0" cellpadding="0">
<tr><td class="header" style="height: 75px;">&nbsp;</td></tr>
<tr><td class="subhead" style="height: 25px;"  valign="top">
	<table width="80%" cellspacing="0" cellpadding="0" valign="top" align="center">
	<tr>
		<td style="width: 10px">&nbsp;</td>
		<td  valign="top" align="left"><a href="http://www2.mcdaniel.edu/pbradley/Archive/index.php">Home</a> </td>
		<td  valign="top" align="right"><?php print date('D, M d, Y'); ?></td>
	</tr>
	</table>
</td></tr>
<tr>
	<td class="tableMiddle">
		<table cellspacing="0" cellpadding="5" border="0" width="100%">
		<tr>
			<td style="width: 5px">&nbsp;</td>
			<td style="width: 150;" valign="Top" class="leftBorder">&nbsp;
			</td>
			<td valign="Top" class="tableBody">
<p class="bodyHead">Notes</p>
<?php
$xml_parser = xml_parser_create();
xml_set_element_handler($xml_parser, "startElement", "endElement");
xml_set_character_data_handler($xml_parser, 'elementContent');
if (!($fp = fopen($file, "r"))) {
   die("could not open XML input");
}

while ($data = fread($fp, 4096)) {
   if (!xml_parse($xml_parser, $data, feof($fp))) {
       die(sprintf("XML error: %s at line %d",
                   xml_error_string(xml_get_error_code($xml_parser)),
                   xml_get_current_line_number($xml_parser)));
   }
}
xml_parser_free($xml_parser);
?> 
			</td>
			<td class="rightBorder" valign="Top" style="width: 100px;">
			<?php include('links.php'); ?>
			</td>
			<td style="width: 5px">&nbsp;</td>
		</tr></table>
</td>
</tr>
<tr><td class="footer" style="height: 20px;" valign="top">&nbsp;</td></tr>
</table>
<table>
<tr><td align="center" style="text-align: center; 	color: #FFFFFF;">Dr. Peter Bradley<br>
Assistant Professor of Philosophy<br>
McDaniel College<br>
Office: BMC 110<br>
Email: pbradleyATmcdaniel.edu</td></tr></table>
</table>
</body>
</html>
