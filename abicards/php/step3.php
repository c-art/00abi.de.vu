<html>
 <script language=javascript src=../js/javascript.js></script>
 <style>
  a {text-decoration:none;font-family:verdana;font-size:15pt;}
  a:hover {color:#FFFFFF;}
  td.headline {font-family:verdana;font-size:14pt;font-weight:bold;color:#FFFFFF;}
  td.text     {font-family:verdana;font-size:12pt;color:#FFFFFF;}
 </style>
 <body bgcolor=#000000 alink=#AFAFAF vlink=#AFAFAF link=#AFAFAF style="background-image:url(../../abigent/img/back.gif); background-repeat:no-repeat; background-attachment:fixed; background-position:0px 0px;">
  <form action=sendit.php method=post>
   <table width=100% border=0>
    <?
     include_once("../../inc.mysql.php");

     mysql_connect("$mysql_host","$mysql_username","$mysql_passwort") or die ("Fehler: Konnte Verdingung nicht herstellen");
     mysql_select_db("$mysql_db") or die ("Fehler: Konnte die Datenbank nicht auswählen");
     $query = "INSERT INTO abicards (abs_name,abs_email,empf_name,empf_email,pic,headline,text,no) VALUES ('$abs_name','$abs_email','$empf_name','$empf_email','$pic','$headline','$text','$no')";
     $res = mysql_query($query) or die ("Fehler: Konnte Datensatz nicht einfügen");
     mysql_close();

     print "<input type=hidden name=abs_name   value=$abs_name>\n";
     print "<input type=hidden name=abs_email  value=$abs_email>\n";
     print "<input type=hidden name=empf_name  value=$empf_name>\n";
     print "<input type=hidden name=empf_email value=$empf_email>\n";
     print "<input type=hidden name=pic        value=$pic>\n";
     print "<input type=hidden name=headline   value=$headline>\n";
     print "<input type=hidden name=text       value=\"$text\">\n";
     print "<input type=hidden name=no         value=$no>\n";
     print "<tr><td class=headline align=center>$headline</p>\n";
     print "<tr><td align=center><img src=$pic border=0></td><tr>\n";
     print "<tr><td class=text align=center>$text</td></tr>\n";
    ?>
   </table>
  </form>
  <a href=javascript:go_on()>Abicard versenden</a>
 </body>
</html>