<HTML>

<STYLE TYPE='text/css'>
 body { background-image:url(../img/8.jpg); background-repeat:no-repeat; background-attachment:fixed; background-position:0px 0px;  }
 A {font-family:verdana;font-size:8pt;color:#444444; text-decoration:none;}
 A:hover {font-family:verdana;font-size:8pt;color:#999999; text-decoration:none;}
</STYLE>

<SCRIPT language='Javascript'>
 <?                                    
 $aktzeit=getdate ();                  
 echo "var aktzeit=$aktzeit[hours];\n";
 ?>                                    
 var akttime='';
 
 function go(where) {
     if (aktzeit>20) akttime='dunkel';  else {
     if (aktzeit<13) akttime=''; else akttime='leer'; }
  eval('parent.frames[5].location.href="movie/'+where+akttime+'/tv.html"');
}
      
 function gorand(where) {
 	if (aktzeit>20) akttime='dunkel';  else {
     if ((Math.round(Math.random()*8))==4) akttime=''; else akttime='leer'; }
     eval('parent.frames[5].location.href="movie/'+where+akttime+'/tv.html"');
}
        
</SCRIPT> 
          

<BODY bgcolor=black onload="parent.search.location.href='../desk/s33.html'">
<TABLE border=0 width=100% height=100%><TR><TD align=center>

<!--<A href="javascript:go('raum1')">ARaum </A><BR>
<A href="javascript:go('platz1')">SportPlatz </A><BR>
<A href="javascript:go('flur1')">Flur</A><BR> 
<A href="javascript:gorand('flur2')">Flur2</A><BR> 
<A href="javascript:go('hof1')">Hof1</A><BR>   
<A href="javascript:go('hof2')">Hof2</A><BR>   
    -->                                                                                              



<IMG src=img/plan.jpg USEMAP="#map1" border=0>

<MAP NAME="map1">
<AREA SHAPE=RECT COORDS="237,222,274,247" HREF=javascript:go('flur1'); ></AREA>
<AREA SHAPE=RECT COORDS="202,248,239,268" HREF=javascript:gorand('flur2'); ></AREA>
<AREA SHAPE=RECT COORDS="259,267,300,290"HREF=javascript:go('raum1'); ></AREA>
<AREA SHAPE=RECT COORDS="277,61,320,85"HREF=javascript:go('hof1'); ></AREA>
<AREA SHAPE=RECT COORDS="127,57,178,86" HREF=javascript:go('hof2'); ></AREA>
<AREA SHAPE=RECT COORDS="0,147,40,182"HREF=javascript:go('platz1'); ></AREA>
<AREA SHAPE=RECT COORDS="430,290,436,298" HREF="../parties/parties-eintragen.php3"></AREA>
<AREA SHAPE=RECT COORDS="424,290,430,298" HREF="../desk/count.php3"></AREA>
</MAP>
  
  </TD></TR>
<TR><TD align=center valign=bottom class=text><A href=mailto:tobiasbielohlawek@gmx.de>verantwortlich für diese Kategorie: T. Bielohlawek</A></TD></TR>
 </TABLE>
 
</BODY>
</HTML>