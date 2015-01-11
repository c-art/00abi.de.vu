<!-- requieres: $anz $nr $pfad
		anzhal der Zeilen->
<HTML>
<BODY bgcolor=#000000>
 <STYLE TYPE="text/css">
  #opt {width:120px; background-color:#000000; font-size:9pt; font-family:Verdana; font-weight:bold; color:#33CC66;}
 </STYLE>  
 <TABLE border=0 width=100% cellspacing=0 cellpadding=0><TR><TD>&nbsp;</TD></TR><TR><TD align=right valign=top>
 <FORM action=show.php target=maingale>
 <? echo"<INPUT type=hidden name=pfad value=$pfad>\n"; ?>
 <SELECT size=1 id=opt name=nr onchange=forms[0].submit(); width=120>
 
   <?
 echo"<OPTION value=nothing>$nr. Bild\n"; 
 echo"<OPTION value=nothing>------------------------\n";
  for($i = 1; $i <= $anz; $i++) echo"<option value=$i>$i.Bild\n";
  ?>

<OPTION value=nothing>------------------------
</SELECT></FORM></TD></TR></TABLE>
 </BODY>
</HTML>
  
 