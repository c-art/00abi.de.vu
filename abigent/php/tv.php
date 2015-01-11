<HTML>
 <SCRIPT LANGUAGE="JavaScript" src=../../spycam/js/tv.js></SCRIPT>
 <STYLE TYPE=text/css>
  #tv {position:absolute; top:22; left:1; z-index:10;}
  #decks {position:absolute; top:22; left:1; z-index:30;}
  #rahmen {position:absolute; top:12; left:0; z-index:50;}
 </STYLE>
 <SCRIPT LANGUAGE="JavaScript">
  function link(no){
   window.open("../html/fake.html", "photo", "dependent=yes,height=500,hotkeys=no,locationbar=no,menubar=no,resizeable=no,status=no,width=400,screenX=100,screenY=100");
   document.forms[0].elements[0].value = no;
   document.forms[0].submit();
  }
  // ist dafür das der Fernseher auf uns zu geht, wird beim laden geöffnet
  var deck1=100;
  var deck2=100;
  var deck3=100;
  var deck4=100;
  var deck5=100;
  var deck6=100;
  deck = new tgif('deck','bildd',6)
  for (var i=1;i<=6;i++) {
  // ACHTUNG: PFADANGABEN!!!!
   if (i<10) preload('bildd'+i,'../../img/tv0'+i+'.gif');
   else preload('bildd'+i,'../../img/tv'+i+'.gif');
  }
 </SCRIPT>
 <BODY background=../../img/5.jpg onload="deck.open1(1); parent.frames[6].point.doit('on');">
  <form action="photo.php" method=post target=photo>
   <input type=hidden name=aim>
  </form>
  <DIV id=tv>
    <!-- Hier Inhalt des Fernseher eintragen  Höhe=85  Breite=115 -->

    <?

    include_once("../../inc.mysql.php");

     mysql_connect("$mysql_host","$mysql_username","$mysql_passwort") or die ("Fehler: Konnte Verdingung nicht herstellen");
     mysql_select_db("$mysql_db") or die ("Fehler: Konnte die Datenbank nicht auswählen");
     $res = mysql_query("SELECT * FROM abigents WHERE no = '$aim3'") or die ("Fehler: Konnte Select nicht ausführen");
     while($row = mysql_fetch_array($res)){
      print "<img src=../pic/thumbnails/$row[no].jpg height=85 width=115 border=0>\n";
      print "</DIV>\n";
      print "<DIV id=decks><IMG src=../../img/tv01.gif border=0 height=85 width=115></DIV>\n";
      print "<DIV id=rahmen><a href=\"javascript:link('$row[no]')\"><IMG src=../../img/rahmen.gif border=0></a></DIV>\n";
     }
    ?>
     <!-- <IMG src=bild00.jpg border=0 height=85 width=115> -->
    <!-- Ende -->
 </BODY>
</HTML>