<html>
 <style>
  a {text-decoration:none;font-family:verdana;font-size:13pt; color:#EEEEEE;}
  a:hover {color:#FFFFFF;}
  .text {font-family:verdana;font-size:10pt;color:#EEEEEE;}
 </style>
 <body bgcolor=#000000 alink=#AFAFAF vlink=#AFAFAF link=#AFAFAF style="background-image:url(../../abigent/img/back.gif); background-repeat:no-repeat; background-attachment:fixed; background-position:0px 0px;">
  <TABLE width=100% border=0>
  <TR><TD align=center valign=middle>&nbsp;<BR><BR><BR></TD></TR>
  <TR><TD align=center valign=middle class=text>
  <?
     include_once("../../inc.mysql.php");

   mysql_connect("$mysql_host","$mysql_username","$mysql_passwort") or die ("Fehler: Konnte Verdingung nicht herstellen");
   mysql_select_db("$mysql_db") or die ("Fehler: Konnte die Datenbank nicht auswählen");

   $res = mysql_query("SELECT * FROM abicards WHERE no = '$no'") or die ("Fehler: Konnte Select nicht ausführen");

    $row = mysql_fetch_array($res);
    // Empfänger : "$row[empf_mail]
    // Absender  : "$row[abs_email]
    // Subject   : "Dir wurde eine Abikarte gesandt"
    // Body      : "$text"
    $text="Hallo $row[empf_name],\n $row[abs_name] hat Dir eine Abikarte gesendet. Du kannst diese unter http://www.00abi.de.vu abrufen.\nUm die Karte betrachten zu können, musst Du diese Nummer eingeben: $row[no]";
    if ($row[empf_email]!="") {
     mail("$row[empf_email]","Dir wurde eine Abikarte von $row[abs_name] gesandt","$text","FROM:$row[abs_email]");
    print "Die Abikarte wurde an <b>$row[empf_email]</b> gesendet\n";
    } else print "Die Abikarte konnte nicht gesendet werden, es wurde kein Empfänger eingegeben.\n";
  ?>
  </TD></TR>
  <TR><TD align=center valign=middle>&nbsp;<BR><BR><BR></TD></TR>
  <TR><TD><a href=../index.html>Back To The Roots</a></TD></TR>
  </TABLE>
 </body>
</html>