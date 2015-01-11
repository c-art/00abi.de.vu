<html>
 <script language=javascript src=../js/board.js></script>
 <body bgcolor=#000000 vlink=#FFFFFF alink=#FFFFFF link=#FFFFFF text=#FFFFFF>
  <script language=javascript>
   draw();
  </script>
  <style type=text/css>

   a:hover {font-size:12pt;color:FFFFFF;}
  </style>
  <?

  include_once("../../inc.mysql.php");

    mysql_connect("$mysql_host","$mysql_username","$mysql_passwort") or die ("Fehler: Konnte Verdingung nicht herstellen");

    mysql_select_db("$mysql_db") or die ("Fehler: Konnte die Datenbank nicht auswählen");

    $res = mysql_query("SELECT * FROM abigents WHERE no = '$aim2'") or die ("Fehler: Konnte Select nicht ausführen");

    while($row = mysql_fetch_array($res)){
      print "<script language=javascript>\n";
      print "handy='$row[handy]';\n";
      print "prefix = '0049'+ handy.substring(1,4);\n";
      print "number= handy.substring(4,11);\n";
/*Tobi*/   print"parent.parent.frames[3].tick.cngtext('$row[name]";

        if($row[handy] != "kein Handy") print "- $row[handy] ";
       if($row[email] != "keine eMail") print "- $row[email] ";
       if($row[url] != "keine URL") print "- $row[url] ";
       print "- Klicken sie auf den Fernseher um das Bild zu vergrössern! -->');";
      print "</script>\n";
      print "<p style=font-family:verdana;font-size:15pt;font-weight:bold;color:#FFFFFF;position:absolute;top:0;left:100;>$row[name]</p>\n";
      print "<p style=font-family:verdana;font-size:7pt;font-weight:bold;color:#EEEEEE;position:absolute;top:25;left:110;>$row[lk]</p>\n";
      print "<p style=font-family:verdana;font-size:8pt;font-weight:bold;color:#EEEEEE;position:absolute;top:50;left:150;>\n";
       if($row[handy] != "kein Handy") print "<a href=javascript:move_layer() onMouseOver=\"status='SMS senden'; return true;\" onMouseOut=\"status='';return true;\">$row[handy]</a><br>\n";
       if($row[email] != "keine eMail") print "<a href=mailto:$row[email]>$row[email]</a><br>\n";
       if($row[url] != "keine URL") print "<a href=http://$row[url] target=_blank>$row[url]</a><br>\n";
      print "</p>\n";
    }
  ?>
 </body>
</html>