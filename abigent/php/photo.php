<html>
 <?
   include_once("../../inc.mysql.php");

    mysql_connect("$mysql_host","$mysql_username","$mysql_passwort") or die ("Fehler: Konnte Verdingung nicht herstellen");

    mysql_select_db("$mysql_db") or die ("Fehler: Konnte die Datenbank nicht auswählen");

    $res = mysql_query("SELECT * FROM abigents WHERE no = '$aim'") or die ("Fehler: Konnte Select nicht ausführen");

    while($row = mysql_fetch_array($res)){
     print "<head>";
     print "<title>$row[name]</title>";
     print "</head>";
     print "<body bgcolor=#000000 onUnload=\"window.close()\" onBlur=\"window.close()\" onClick=\"window.close()\">";
     print "<img src=\"../pic/normal/$row[no].jpg\" border=0 style=\"position:absolute; top:0px; left:0px;\" border=0>\n";
    }
 ?>
</body></html>