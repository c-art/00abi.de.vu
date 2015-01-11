function go_on() {
	document.forms[0].submit();
}

function pickup() {
	document.forms[0].elements[0].value = prompt("Bitte Nummer der Karte eingeben!","");
	go_on();
}

function sendit(){
	go_on();
	window.location.href = "../html/cards.html";
}