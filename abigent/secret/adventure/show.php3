<HTML>
<HEAD><TITLE>ADMIN Page</TITLE></HEAD>

<STYLE type=text/css>
  .text   {font-family:verdana; font-size:10pt; font-weight:normal; color:#FFFFFF;}
  a       {font-size:10pt; color:#FFFFFF; }
  a:hover {font-size:10pt; color:0055FF; }
</STYLE>

<BODY bgcolor=#000000>
 
  <TABLE border=0 width=100% height=100%>
  
<?
$mysql_host = "localhost"; /* muss so bleiben */
$mysql_username = "www49"; /* z.B. wwwXXX wobei XXX für Usernummer */
$mysql_passwort = "nH72i"; /* das Passwort */
$mysql_db = "mysql49";     /* z.B. mysqlXXX wobei XXX für Usernummer */
$mysql_tb = "adventure";     /* z.B. mysqlXXX wobei XXX für Usernummer */

mysql_connect("$mysql_host","$mysql_username","$mysql_passwort") or die ("Fehler: Konnte Verdingung nicht herstellen");
mysql_select_db("$mysql_db") or die ("Fehler: Konnte die Datenbank nicht auswählen");

if ($line=="") $line="1";
$res = mysql_query("SELECT * FROM $mysql_tb WHERE no=$line")  or die ("Fehler: Konnte Select nicht ausführen");

while($row = mysql_fetch_array($res)){
    
   $row[text]= ereg_replace('\[Punkt ','<A href=show.php3?line=', $row[text]);
   $row[text]= ereg_replace('\]','>Klick hier</A>', $row[text]);	
   
   	echo "<TR><TD width=90>&nbsp;</TD><TD class=text>$row[text]</TD><TD width=90>&nbsp;</TD></TR>";
   	$num=$row[no]+1;
   //	echo "<TR><TD width=90 class=text><A href=show.php3?line=$num>NExT</A></TD><TD height=40>&nbsp;</TD><TD width=90>&nbsp;</TD></TR>";
       }
    mysql_close();
?>

</TABLE>
</BODY>
</HTML>