<html>
 <style>
  a {text-decoration:none;font-family:verdana;font-size:10pt;color:#EEEEEE;}
  a:hover {color:#FFFFFF;}
  td.headline {font-family:verdana;font-size:13pt;font-weight:bold;color:#FFFFFF;}
  td.text     {font-family:verdana;font-size:10pt;color:#EEEEEE; text-align:justify;}
 </style>
 <body bgcolor=#000000 vlink=#AFAFAF link=#AFAFAF alink=#AFAFAF style="background-image:url(../../abigent/img/back.gif); background-repeat:no-repeat; background-attachment:fixed; background-position:0px 0px;">
  <table width=100% border=0>
   <?
     include_once("../../inc.mysql.php");;

    mysql_connect("$mysql_host","$mysql_username","$mysql_passwort") or die ("Fehler: Konnte Verdingung nicht herstellen");
    mysql_select_db("$mysql_db") or die ("Fehler: Konnte die Datenbank nicht auswählen");

    $res = mysql_query("SELECT * FROM abicards WHERE no = '$no'") or die ("Fehler: Konnte Select nicht ausführen");

    $row = mysql_fetch_array($res);
    print "<tr><td class=headline align=center>$row[headline]</td></tr>\n";
    print "<tr><td align=center><img src=$row[pic] border=0></td></tr>\n";
    print "<tr><td align=center>&nbsp;</td></tr>\n";
    print "<tr><td class=text>$row[text]</td></tr>\n";

    mysql_close();
   ?>
  </table>
 </body>
</html>