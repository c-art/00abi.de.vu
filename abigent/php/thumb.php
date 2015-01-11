<html>
 <style type=text/css>
  td {font-family:verdana;font-size:9pt;font-weight:bold;}
  a {text-decoration:none; color:#DDDDDD;}
  a:hover {color:#FFFFFF;}
 </style>
 <script language=javascript>
  function link(no){
   document.forms[0].elements[0].value = no;
   document.forms[0].submit();
   document.forms[1].elements[0].value = no;
   document.forms[1].submit();
   document.forms[2].elements[0].value = no;
   document.forms[2].submit();
  }
 </script>
 <body link=#AFAFAF vlink=#AFAFAF alink=#FFFFFF bgcolor=#000000>
  <div style="position:absolute; top:0px; left:0px">
  <table border=0 cellpadding=0 cellspacing=0 bgcolor=#000000 >
   <?
    include_once("../../inc.mysql.php");

    mysql_connect("$mysql_host","$mysql_username","$mysql_passwort") or die ("Fehler: Konnte Verdingung nicht herstellen");
    mysql_select_db("$mysql_db") or die ("Fehler: Konnte die Datenbank nicht auswählen");
    if ($query=="") $query="_";

    $res = mysql_query("SELECT no,name FROM abigents WHERE (name like '%$query%') or (text like '%$query%') ORDER by no") or die ("Fehler: Konnte Select nicht ausführen");
    echo "<tr align=center>\n";
    while($row = mysql_fetch_array($res)){
        echo "<td><a href=javascript:link('$row[no]'); onMouseOver=\"javascript:status='$row[name]';return true;\" onMouseOut=\"javascript:status='';return true;\"><img src=../pic/thumbnails/$row[no].jpg height=50 border=0></a><br>";
        echo "<img src=../img/abst.gif width=150 height=5 border=0></td>\n";
    }
    echo "</tr>\n";

    $res = mysql_query("SELECT no,name FROM abigents WHERE (name like '%$query%') or (text like '%$query%') ORDER by no") or die ("Fehler: Konnte Select2 nicht ausführen");
    echo "<tr align=center>\n";
    while($row = mysql_fetch_array($res)){
        echo "<td><a href=javascript:link('$row[no]'); onMouseOver=\"javascript:status='$row[name]';return true;\" onMouseOut=\"javascript:status='';return true;\">$row[name]</a></td>\n";
    }
    echo "</tr>\n";
          mysql_close();
   ?>
  </table></div>
  <form action=file.php method=post target=file>
   <input type=hidden name=aim>
  </form>
  <form action=top.php method=post target=top>
   <input type=hidden name=aim2>
  </form>
  <form action=tv.php method=post target=tv>
   <input type=hidden name=aim3>
  </form>
 </body>
</html>