<html>

<script language="JavaScript">
  function selchange()
  {
  	var sel=document.form1.select1.selectedIndex;
  if (sel>0)	parent.main.main.scrollTo ((sel-1)*200,0);
  else
  {
  	document.form1.query.value="";
  	refreshthisframe();
  }

  }

  function refreshthisframe()
  {
   		   window.location.href="search.php?query="+document.form1.query.value;
   		   parent.main.main.location.href="mitte.php?query="+document.form1.query.value;
  }
</script>
<body bgcolor=#000000 text=#ffffff>

<form onSubmit="refreshthisframe()" name="form1">
<div align=right>
<select style="background-color:#000000; font-size:9pt; font-family:Verdana,arial; font-weight:bold; color:#33CC66;" name="select1" onChange="selchange()" onBlur="selchange()">
<option>
Alle Sprüche
</option>
<?
    include_once("../inc.mysql.php");

    mysql_connect("$mysql_host","$mysql_username","$mysql_passwort") or die ("Fehler: Konnte Verdingung nicht herstellen");
	@mysql_select_db("$mysql_db") or die( "Unable to select database");
    if ($query=="") $query="_";
    $searchstring="select * from sprueche where inhalt like '%$query%' order by bewertung desc";

    $exenr = mysql_query($searchstring);
	$num = mysql_num_rows($exenr);
	for ($i=0; $i<$num; $i++)
	{
	 	echo "<option>Spruch #$i</option>\n";

	}


?>

</select><img src="black.gif"><br>
<!--

spruchnr	chronologie	name	zitat




-->
<input name="query" style="background-color:#000000; font-size:9pt; font-family:Verdana,arial; font-weight:bold; color:#33CC66;"><input type=image border=0 src="suchen.gif"><br>
</div>
</form>

</body>

</html>