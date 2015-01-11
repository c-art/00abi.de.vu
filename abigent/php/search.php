<html>
<script language="JavaScript">
 function sendit()
  { 
    parent.main.thumbnails.location.href="show.php3?query="+document.form1.query.value;
  }
</script>

<body bgcolor=#000000 text=#ffffff>
 
 
 <form name="form1">
    <input name="query" style="width:120px; background-color:#000000; font-size:9pt; font-family:Verdana; font-weight:bold; color:#33CC66;">
    <input type=button value=suchen onclick="sendit();"><br>
 </form>

</body>
</html>