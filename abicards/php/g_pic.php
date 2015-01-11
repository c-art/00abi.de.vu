<html>
 <script language=javascript src=../js/javascript.js></script>
 <style>
  a {text-decoration:none;font-family:verdana;font-size:15pt;}
  a:hover {color:#FFFFFF;}
  p {font-family:verdana;color:#FFFFFF;font-size:15pt;}
 </style>
 <body bgcolor=#000000 link=#AFAFAF alink=#AFAFAF vlink=#AFAFAF style="background-image:url(../../abigent/img/back.gif); background-repeat:no-repeat; background-attachment:fixed; background-position:0px 0px;">
  <form action=step2.php method=post target=cards>
   <br>
   <p align=center>Motiv ausw&auml;hlen!</p>
   <br>
   <table>
    <?
     include_once("../../inc.mysql.php");

     mysql_connect("$mysql_host","$mysql_username","$mysql_passwort") or die ("Fehler: Konnte Verdingung nicht herstellen");
     mysql_select_db("$mysql_db") or die ("Fehler: Konnte die Datenbank nicht auswählen");

     print "<tr>\n";


     print "</tr>\n";

     mysql_close();
    ?>
   </table>
  </form>
  <a href=javascript:go_on()>next Step</a>
 </body>
</html>