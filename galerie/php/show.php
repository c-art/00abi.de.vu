<? 
// requiers:  $nr $pfad $aufl  {$anz $t(nr) ${$x}(nr) ${$y}(nr)}  

$x='x'.$nr;
$y='y'.$nr;
$t='t'.$nr;

if ($nr<10) $nnr='0'.$nr;
 else $nnr=$nr; 

$nnnr=$nr+1;
if ($nnnr<10) $nnnr='0'.$nr;
require($pfad.'.php');
?>
	 
<HTML>
<STYLE TYPE="text/css">
  .text {font-size:9pt; font-family:Verdana; color:#EEEEEE;}
</STYLE>
<SCRIPT language="Javascript">
  
  <? 
  echo"parent.parent.search.location.href='opt.php?anz=$anz&nr=$nr&pfad=$pfad';";
  if (${$t}!="&nbsp;") echo"parent.parent.frames[3].tick.cngtext('${$t}');";
   ?>
   
</SCRIPT>
<BODY bgcolor=#000000 text=#ffffff> 
<TABLE border=0 width=100%><TR><TD valign=top align=center>
<TABLE border=0 cellpadding=0 cellspacing=0>
<TR><TD rowspan=3> 
 
<?
 if ($nr>=2) 
   echo"<A href=show.php?pfad=$pfad&nr=".($nr-1)."><IMG src=../img/pfl01.gif border=0></A>\n";
  else echo"&nbsp;\n";
 echo"</TD><TD rowspan=3>&nbsp;</TD><TD><IMG src=../img/rahmen/ol.jpg border=0 width=26  height=24></TD><TD><IMG SRC=../img/rahmen/ob.jpg border=0 width=${$x} height=24></TD><TD><IMG src=../img/rahmen/or.jpg border=0 width=30 height=24></TD>\n";
 if ($nr<$anz)  {
  echo"<TD rowspan=3>&nbsp;</TD><TD rowspan=3><A href=show.php?pfad=$pfad&nr=".($nr+1)."><IMG SRC=../img/pfr01.gif Border=0></A></TD></TR>\n";
   }
 else  
  echo"<TD rowspan=3>&nbsp;</TD><TD Rowspan=3>&nbsp;</TD></TR>\n";
 echo"<TR><TD><IMG src=../img/rahmen/li.jpg border=0 width=26 height=${$y}></TD><TD><A href=../../abicards/php/step2.php?aim=../../galerie/fotos/$pfad/bild$nnr.jpg target=_parent><IMG src=../fotos/$pfad/bild$nnr.jpg border=0 width=${$x} height=${$y}></A></TD><TD><IMG src=../img/rahmen/re.jpg border=0 width=30 height=${$y}></TD></TR>\n";    
 echo"<TR><TD><IMG src=../img/rahmen/ul.jpg border=0 width=26 height=27></TD><TD><IMG src=../img/rahmen/un.jpg border=0 width=${$x} height=27></TD><TD><IMG src=../img/rahmen/ur.jpg border=0 width=30 height=27></TD></TR>\n";
 echo" </TABLE>";
 echo"<TR><TD class=text align=center>${$t}</TD></TR>\n";
 ?>
 </TD></TR></TABLE> 
 <? if ($nr<$anz) echo"<IMG src=../fotos/$pfad/bild$nnnr.jpg border=0 width=1 height=1>\n"; ?>
 </BODY>
 </HTML>