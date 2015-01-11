pos_x = -360;
prefix = "";
number = "";
beamsmsa = new Image(); 
beamsmsa.src = "../img/smsbeama.gif";
beamsmsb = new Image(); 
beamsmsb.src = "../img/smsbeamb.gif";

function dynimg (mode) {
	if(document.all) document.images[2].src=(mode==1)?beamsmsb.src:beamsmsa.src;
	if(document.layers) window.document.layers[0].document.images[2].src=(mode==1)?beamsmsb.src:beamsmsa.src;
}

function trysms(){
	s_int = 125;	
	if (document.layers){
		s_len = parent.frames[0].document.layers[0].document.forms[0].SMSmessage.value.length;
		if (s_len > s_int ){
			parent.frames[0].document.layers[0].document.forms[0].SMSmessage.value =
			parent.frames[0].document.layers[0].document.forms[0].SMSmessage.value.substring(0,s_init);
			s_left = 0;
		}
		else{
			s_left = s_int - s_len;
		}
		parent.frames[0].document.layers[0].document.form1.Anzahl.value = s_left;
	}
	if (document.all){
		s_len = parent.frames[0].document.form1.SMSmessage.value.length;
		if (s_len > s_int ){
			parent.frames[0].document.form1.SMSmessage.value =
			parent.frames[0].document.form1.SMSmessage.value.substring(0,s_init);
			s_left = 0;
		}
		else{
			s_left = s_int - s_len;
		}
		parent.frames[0].document.form1.Anzahl.value = s_left;		
	}
}

function draw(){
	document.writeln("<style type=text/css>");
	document.writeln('input {background-color:#666666; font-size:9pt; font-family:Verdana; color:#33CC66; font-weight:bolder; font-size:8pt;}');
	if (document.layers) document.writeln("#leiste { position:absolute; top:10; left:"+pos_x+"; layer-background-image:url(../img/leiste.jpg); z-index:10;}");
	if (document.all) document.writeln("#leiste { position:absolute; top:10; left:"+pos_x+"; background-image:url(../img/leiste.jpg); z-index:10;}");
	document.writeln("#back {position:absolute; top:0; left:0; z-index:50;}");
	document.writeln("</style>");
	
	document.writeln("<div id=\"leiste\">");
	//document.writeln("<img src=../img/leiste.jpg>");
/*---*/	document.writeln("<form name=\"form1\" action=\"http://db.jobs-deutschland.de/sms/queue\" method=post target=fake>"); //action=http://db.jobs-deutschland.de/sms/queue
	document.writeln("<input name=SMSreturnhtml type=hidden value=http://www.49.l3.xodox.com/abigent/html/ok.html>"); ///allgemein/thanx.htm
	document.writeln("<input name=SMSprefix type=hidden><input id=inpt name=SMSnumber type=hidden>");
	document.writeln("<table border=0 cellpadding=0 cellspacing=0 style=postition:absolute; top:0px; left:0px;>");
	document.writeln("<tr>");
	document.writeln("<td><img src=\"../img/abst.gif\" height=\"12\" width=\"400\"></td>");
	document.writeln("</tr>");
	document.writeln("<tr>");
	document.writeln("<td>");
	document.writeln("<img src=../img/abst.gif height=20 width=65>");
	if (document.layers) document.writeln("<input id=inpt size=\"16\" name=\"SMSmessage\" onChange=\"trysms()\" onFocus=\"trysms()\" onBlur=\"trysms()\" onKeyDown=\"trysms()\" onKeyUp=\"trysms()\" onClick=\"trysms()\">");
	if (document.all) document.writeln("<input id=inpt size=22 name=SMSmessage onChange=\"trysms()\" onFocus=\"trysms()\" onBlur=\"trysms()\" onKeyDown=\"trysms()\" onKeyUp=\"trysms()\">");
	document.writeln("<input size=\"3\" name=\"Anzahl\" readonly>");
	document.writeln("<input type=hidden name=bed value=checkbox>");
	//document.writeln("<input name=\"submitt\" type=hidden value=ABSENDEN>");
	document.writeln("<a href=\"javascript:beamsms()\" onMouseOver=\"dynimg(1)\" onMouseOut=\"dynimg(0)\"><img src=\"../img/smsbeama.gif\" border=\"0\"></a>");
	document.writeln("</td>");
	document.writeln("</tr>");
	document.writeln("</table>");
	document.writeln("</form>");
	document.writeln("</div>");
	document.writeln("<div id=back>");
	document.writeln("<img src=../img/back.gif>");
	document.writeln("</div>");
}

function move_layer(){
	if (document.layers){
		pos_x+=40;
		parent.frames[0].document.leiste.left = pos_x;
		if (document.leiste.left<0){window.setTimeout("move_layer()",1);}
	}
	if (document.all){
		pos_x+=10;
		parent.frames[0].document.all.leiste.style.left = pos_x;
		if (pos_x<0){window.setTimeout("move_layer()",1);}
	}
	trysms();
}

function beamsms(){
	//parent.frames[0].location.href="http://www49.l3.xodox.com/abigent/html/ok.html";
	pos_x = -360;	
	if (document.layers){
		parent.frames[0].document.layers[0].document.form1.SMSprefix.value = prefix;
		parent.frames[0].document.layers[0].document.form1.SMSnumber.value = number;
		parent.frames[0].document.layers[0].document.form1.submit();
		window.document.leiste.left = pos_x;
		alert('SMS versendet an '+prefix+number);
	}
	if (document.all){
		parent.frames[0].document.form1.SMSprefix.value = prefix;
		parent.frames[0].document.form1.SMSnumber.value = number;
		parent.frames[0].document.form1.submit();
		window.document.all.leiste.style.left = pos_x;
		alert('SMS versendet an '+prefix+number);
	}
}