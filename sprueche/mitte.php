<html>
<STYLE TYPE="text/css">
<!--
<?
      include_once("../inc.mysql.php");

    mysql_connect("$mysql_host","$mysql_username","$mysql_passwort") or die ("Fehler: Konnte Verdingung nicht herstellen");
	@mysql_select_db( "$mysql_db") or die( "Unable to select database");

    if ($query=="") $query="_";
    $searchstring="select * from sprueche where inhalt like '%$query%' order by bewertung asc";
    $exenr = mysql_query($searchstring);
	$num = mysql_num_rows($exenr);
	for ($i=0; $i<$num; $i++)
	{
	 	$linksstart=$i*200+5;
	 	$rechtsstart=$i*200+205;
	 	//echo "#s$i {position:absolute; left:$linksstart; top:40; max-width:195px; clip:rect(0,200,230,0); background-color:#9fcfaf; layer-background-color:#9fcfaf;}\n";

	}


?>
-->
</STYLE>
<script language="JavaScript">
function scrollpos(spruch)
{
  window.scrollTo ((spruch-1)*200,0);
}
</script>

<body bgcolor=#000000 text=#000000>

<font face="verdana, arial, helvetica" size=1>
<?
    $exenr = mysql_query("$searchstring");
    $index=0;
    if ($num==0) echo "<center><img src='img/logo.jpg'><p><font color=#ffffff>Keine Sprüche gefunden (zum Suchbegriff $query)</font></center>";
    while($row = mysql_fetch_object($exenr))
	{
	 		   $spruchnr=$row->snr;
	 		   $bewertung=$row->bewertung;
	 		   $inhalt=$row->inhalt;
		 	   $linksstart=$index*200+5;
			$bewertung=str_replace("3.10","?",$bewertung);
//			   echo "<DIV style=\"position:absolute; left:$linksstart; top:40; max-width:195px; clip:rect(0,200,230,0); background-color:#9fcfaf; layer-background-color:#9fcfaf;\"><layer visibility=show top=0 left=$linksstart width=200 height=125 bgcolor=#DDFFDD>(Note: $bewertung)<br>$inhalt</layer></DIV>";
			if (!strstr($HTTP_USER_AGENT, "MSIE"))  echo "<layer top=0 valign=middle left=$linksstart width=195><font color=#ffffff>(Note: $bewertung)<br>$inhalt</td></font></layer>";
			else echo "<DIV style=\"position:absolute; left:$linksstart; top:0; width:195px; height=80%; clip:rect(0,200,230,0); \"><font color=#ffffff>(Note: $bewertung)<br>$inhalt</font></DIV>";

	 		   $index++;

    }
    mysql_free_result($exenr);
?>
</font>
</body>

<? mysql_close(); ?>
</html>