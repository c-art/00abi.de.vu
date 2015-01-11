<html><body bgcolor=#000000 vlink=#FFFFFF link=#FFFFFF alink=#FFFFFF>
<script language=javascript src=../js/board.js></script>
<script language=javascript>
 function link(no){
  //window.open("../html/fake.html", "photo", "dependent=yes,heigth=500,hotkeys=no,locationbar=no,menubar=no,resizeable=no,status=no,width=400,screenX=100,screenY=100");
  //document.forms[0].elements[0].value = no;
  //document.forms[0].submit();
 }
</script>
<form action="../php/photo.php" method=post target=photo>
<input type=hidden name=aim>
</form>



  <?
    include_once("../../inc.mysql.php");

    mysql_connect("$mysql_host","$mysql_username","$mysql_passwort") or die ("Fehler: Konnte Verdingung nicht herstellen");

    mysql_select_db("$mysql_db") or die ("Fehler: Konnte die Datenbank nicht auswählen");

    $res = mysql_query("SELECT * FROM abigents WHERE no = '$aim'") or die ("Fehler: Konnte Select nicht ausführen");

    while($row = mysql_fetch_array($res)){
      print "<p style=font-family:verdana;font-size:8pt;font-weight:normal;color:#FFFFFF;position:absolute;top:10;left:10; align=justify>\n";
      print "$row[text]\n";
      print "</p>\n";
      print "<script language=javascript>\n";
      print "link('$row[no]')\n";
      print "</script>\n";
      print "<img src=../pic/normal width=1 height=1>\n";
    }


  ?>
</body></html>