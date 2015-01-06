<?php
function txt2digits ($txt) {
   global $IMG_DIR_URL;
 
   $digits = preg_split("//", $txt);
 
   while (list($key, $val) = each($digits)) {
      if ($val != "")  {
            if ($val == "-") $val = "dash";
            if ($val == ":") $val = "colon";
         $html_result .= "<IMG SRC=\"$IMG_DIR_URL$val.gif\">";
      }
   }
   return $html_result;
}
 
$date = txt2digits(date("d-m-Y"));
$time = txt2digits(date("H:i:s"));
 
// En: End PHP Code
// Fr: Fin code PHP
?>
 
<HTML><HEAD><TITLE>Clock</TITLE></HEAD>
<BODY BGCOLOR="white">
<BR><BR><P ALIGN="Center"><FONT FACE="Arial, helvetica" SIZE="+2" COLOR="#336699"><STRONG><EM>Sample / Examples</EM></STRONG></FONT></P><BR>
<CENTER>
<?php echo $date ?>
<P>
<?php echo $time ?>
</CENTER>
 
</CENTER>
</BODY>
</HTML>