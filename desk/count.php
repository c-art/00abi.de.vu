<HTML>
<HEAD>
<TITLE>Insert title here</TITLE>
</HEAD>
<BODY>
Besucherliste:
<?php
mysql_connect('localhost', "www49", "nH72i") or die("Unable to connect to database");
@mysql_select_db( "mysql49") or die( "Unable to select database");
//  $exenr = mysql_query("drop table visits");
//  $exenr = mysql_query("create table visits (datum int, ip varchar (20), host varchar (255), agent varchar(255), referer varchar (255))");

  $exenr = mysql_query("insert into visits values (".time().",'$REMOTE_ADDR', '$REMOTE_HOST', '$HTTP_USER_AGENT', '$HTTP_REFERER')");
    $result =mysql_query("select * from visits");
    while($row = mysql_fetch_object($result)) 
	{
	 
		echo "$row->datum $row->ip $row->host $row->agent $row->referer<br>";
		 
    }

mysql_close();
?>

</BODY>
</HTML>