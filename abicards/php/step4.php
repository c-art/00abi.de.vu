<html>
 <script language=javascript src=../js/javascript.js></script>
 <style>
  a {text-decoration:none;font-family:verdana;font-size:15pt;}
  a:hover {color:#FFFFFF;}
  td {font-family:verdana;font-size:12pt;color:#FFFFFF;}
 </style>
 <body bgcolor=#000000 alink=#AFAFAF vlink=#AFAFAF link=#AFAFAF style="background-image:url(../../abigent/img/back.gif); background-repeat:no-repeat; background-attachment:fixed; background-position:0px 0px;">
  <form action=sendit.php method=post>
  <br><br><br>
   <table width=100% border=0 cellspacing=0 cellpadding=0>
    <?
     include_once("../../inc.mysql.php");

     mysql_connect("$mysql_host","$mysql_username","$mysql_passwort") or die ("Fehler: Konnte Verdingung nicht herstellen");
     mysql_select_db("$mysql_db") or die ("Fehler: Konnte die Datenbank nicht auswählen");

     $res = mysql_query("SELECT * FROM abicards WHERE no = '$no'") or die ("Fehler: Konnte Select nicht ausführen");

     $row = mysql_fetch_array($res);
      print "<tr>\n";
      print "<td>An <b>$row[empf_email]</b> wird folgender Text gesendet. Du kannst noch etwas hinzufügen oder ändern.</td>";
      print "</tr>\n";
      print "<tr height=150><td valign=middle align=center>\n";
      print "<textarea rows=5 cols=80 name=text readonly>\n";
      print "Hallo $row[empf_name],\n";
      print "$row[abs_name] hat Dir eine Abikarte gesendet. Du kannst diese unter http://www.00abi.de.vu abrufen.\n";
      print "Um die Karte betrachten zu können, musst Du diese Nummer eingeben: $row[no]";
      print "</textarea>\n";
      print "</td></tr>\n";
      print "<input type=hidden name=no value=$no>\n";
    ?>
   </table>
  </form>
  <a href=javascript:go_on()>Abicard versenden</a>
 </body>
</html>