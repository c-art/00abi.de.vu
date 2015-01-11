<HTML><BODY>
Version 1.3<BR>
<?

$mysql_host = "db01.formativ.net:3306";
   $mysql_username = "k1237";
   $mysql_passwort = "3284";
   $mysql_db = "k1237db";


$mysql_tb = "adventure";     /* Tablename*/
$filename= "adventure.txt";   /* Dateiname*/

mysql_connect("$mysql_host","$mysql_username","$mysql_passwort") or die ("Fehler: Konnte Verbingung nicht herstellen");

mysql_select_db("$mysql_db") or die ("Fehler: Konnte die Datenbank nicht auswählen");

mysql_query("DROP TABLE $mysql_tb");
$res = mysql_query("CREATE TABLE $mysql_tb (no varchar(3), text longtext)") or die ("Fehler: Konnte Tabelle nicht erstellen");
$orgfile = file($filename);

for($i=0; $i<=count($orgfile); $i++){
	$line = explode("\t", $orgfile[$i]);   /* Trennen nach TAB */
	//$line[0]=htmlentities($line[0]);               /* Konvertiert z.B. ä --> &auml; */
	$line[0]=str_replace("'","&acute;",$line[0]);  /* Hochkomma ersetzten (NE fähig???)) */
	//$line[0]=str_replace("&lt;","<",$line[0]);
	//$line[0]=str_replace("&rt",">",$line[0]);
	$line[0] = trim($line[0]);                     /* This function strips whitespace from the start and the end of a string and returns the stripped string. ? */

	$num=$i+1;
	echo "$num, $line[0] <BR><BR>";
	$query = "INSERT INTO $mysql_tb (no,text) VALUES ('$num','$line[0]')";
	$res = mysql_query($query) or die ("Fehler: Konnte Datensatz nicht einfügen");
}

mysql_close();

echo "<h1>$filename in $mysql_tb erfolgreich aufgenommen</h1><br><br>";
?>

</BODY></HTML>