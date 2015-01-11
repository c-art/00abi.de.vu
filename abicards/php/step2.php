<html>
 <script language=javascript src=../js/javascript.js></script>
 <style type=text/css>
  td.text  {font-family:verdana;color:#EEEEEE;font-size:10pt;}
  a        {text-decoration:none;font-family:verdana;font-size:13pt;}
  a:hover  {color:#FFFFFF;}
  input    {width:120px; background-color:#000000; font-size:9pt; font-family:Verdana; font-weight:bold; color:#33CC66;}
  textarea {background-color:#000000; font-size:9pt; font-family:Verdana; font-weight:bold; color:#33CC66;}
 </style>
 <body bgcolor=#000000 link=#AFAFAF alink=#AFAFAF vlink=#AFAFAF style="background-image:url(../../abigent/img/back.gif); background-repeat:no-repeat; background-attachment:fixed; background-position:0px 0px;">
  <form action=step3.php method=post>
   <table border=0 width=100%>
    <tr><td colspan=5 align=center class=text height=100 valign=bottom>&Uuml;berschrift:<input name=headline></td></tr>
    <?
      print "<tr><td colspan=5 align=center><img src=$aim border=0><input type=hidden name=pic value=$aim></td><tr>\n";
      $time=time();
      print "<input type=hidden name=no value=$time>\n";
    ?>
    <tr><td colspan=5 align=center><textarea name=text cols=75 rows=10></textarea></td></tr>
    <tr><td colspan=5 height=50>&nbsp;</td></tr>
    <tr><td class=text>Absender Name:</td><td><input name=abs_name></td><td width=40>&nbnsp;</td><td class=text>Empf&auml;nger Name:</td><td><input name=empf_name></td></tr>
    <tr><td class=text>Absender eMail:</td><td><input name=abs_email></td><td width=40>&nbnsp;</td><td class=text>Empf&auml;nger eMail:</td><td><input name=empf_email><BR><BR></td></tr>
    <tr><td colspan=5 height=50>&nbsp;</td></tr>
    <tr><td colspan=5 align=center><a href=javascript:go_on()>next Step</a></td></tr>
   </form>
  </table>
 </body>
</html>