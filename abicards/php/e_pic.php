<html>
 <script language=javascript src=../js/javascript.js></script>
 <style>
  a {text-decoration:none;font-family:verdana;font-size:15pt;}
  a:hover {color:#FFFFFF;}
  p {font-family:verdana;color:#FFFFFF;font-size:15pt;}
 </style>
 <body bgcolor=#000000 link=#AFAFAF alink=#AFAFAF vlink=#AFAFAF style="background-image:url(../../abigent/img/back.gif); background-repeat:no-repeat; background-attachment:fixed; background-position:0px 0px;">
   <p align=center>Motiv ausw&auml;hlen!</p>
   <br>
   <TABLE border=0 width=100%><TR><TD align=center>
   <table border=0>
    <?
     include_once("../../inc.mysql.php");
     mysql_connect("$mysql_host","$mysql_username","$mysql_passwort") or die ("Fehler: Konnte Verdingung nicht herstellen");
     mysql_select_db("$mysql_db") or die ("Fehler: Konnte die Datenbank nicht auswählen");

     $res = mysql_query("SELECT * FROM abigents ORDER by no") or die ("Fehler: Konnte Select nicht ausführen");

     print "<tr>\n";
     while($row = mysql_fetch_array($res)){
      print "<td height=100 width=100 valign=middle align=center><A href='step2.php?aim=../../abigent/pic/normal/$row[no].jpg' ><img src=../../abigent/pic/thumbnails/$row[no].jpg border=0 height=50></A></td>\n";
      if (($row[no]+1)%6 == 0) {print "</tr>\n<tr>\n";}
     }
     print "</tr>\n";
     mysql_close();
    ?>
   </table>
   </TD></TR></TABLE>
 </body>
</html>