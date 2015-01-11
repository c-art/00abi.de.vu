<?php
 $cfg_libarypath = "../_libary";

 $cfg_sitename = 11;

 $connr = 10;

 @include_once("$cfg_libarypath/inc.config.php"); //Global Config File for Server
 @include_once("$cfg_libarypath/inc.mysqlconnect.php");  //Connect to mysqlDB
 include_once("$cfg_libarypath/inc.tools.php");

 if (!isset($cook_userid)) {
   $cook_userid = "guest".time();
   setcookie("cook_userid", $cook_userid, time()*2, "/");
   statistic($cfg_sitename, "visits", $cook_userid, "visit", $connr);
   }
  else
    statistic($cfg_sitename, "views", $cook_userid, "visit", $connr);

?>

<HTML>
  <HEAD>
   <META http-equiv="content-type" content="text/html;charset=iso-8859-1">
   <meta name="generator" content="Adobe GoLive 4">
   <META NAME="keywords" CONTENT="Abi,Abitur,2000,Abi2000,00Abi,Gymnasium,Alzey,Elisabeth-Langgässer,Langgässer,Abiparties,Charakteristika,Zitate,Lehrer,Schüler,Abiturienten,Abigag,007, Galerie, Parties">
   <META NAME="description" CONTENT="ofizielle Jahrgangshomepage des Abi2000-Jahrgangs des Elisabeth-Langgässer Gymnasiums Alzey. Mit Charakteristika, Zitaten, Abiparties, Gallerie u.v.m..">
  <TITLE>00Abi - abi is not enough</TITLE>
 <SCRIPT language="Javascript">
 m= new Array(0,31,59,90,120,151,181,212,243,273,304,334);

var tag=9;
var monat=6;
var jahr=2000;

jetzt = new Date();

var tagj = jetzt.getDate() +1;
var monatj= jetzt.getMonth();
var jahrj =(jetzt.getYear() <=200 ) ? (jetzt.getYear()+1900) : (jetzt.getYear());

//if ((jahr / 4 >0) and (jahr / 100=0)) or (jahr / 400 > 0)

function getcounter(){
document.write(jahr*365+m[monat-1]+tag-(jahrj*365+m[monatj]+tagj));
}

function login() {
check = prompt("Enter MissionPasswort:","");
alert("Invalid password, try in "+(jahr*365+m[monat-1]+tag-(jahrj*365+m[monatj]+tagj))+" days again!!");
}

</SCRIPT>
 <STYLE TYPE="text/css">
  .text {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14pt; font-weight:normal; color:#33CC66; text-decoration: none}
  .text2 {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12pt; font-weight:normal; color:#33CC66; text-decoration:none}
  .text3 {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; font-weight:normal; color:#33CC66; text-decoration: none}
 </STYLE>
</HEAD>
<BASE target=_top>
<BODY   bgcolor="black" text="white">
 <A href="/frame.html">
 <TABLE height=100% width=100% border=0><TR><TD class=text> <A href="/frame.html" class=text>Unsere Mission ist bendet!!!<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...wir geben unsere Akten frei.</A></TD></TR>
 <TR><TD class=text2><BR> <A href="/frame.html" class=text2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unter Secret -> Missions findet ihr die ABIPARTYTERMINE!!!! Viel Spass!</A></TD></TR>
 <TR><TD class=text align=center>
    	<OBJECT classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="00abi" width="550" height="400">
				<PARAM name="movie" value="00abi.swf">
				<PARAM name="loop" value="false">
				<PARAM name="quality" value="high">
				<PARAM name="bgcolor" value="#000000">
				<EMBED src="00abi.swf" loop="false" quality="high" bgcolor="#000000" width="550" height="400" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash">
			</object>

	</TD></TR>

 </TABLE>
</A>
	</BODY>
</HTML>

