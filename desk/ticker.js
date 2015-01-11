/* This script was written by C-ART(c)'99  www.c-art.de.vu  c-art@web.de*/


function ticker(id,text,lengt,speed,pause,status,target)  {
  this.id=id;
  this.text=maketext(text,lengt,pause,status);
  this.oldtext='';
  this.lengt=lengt;
  this.speed=speed+120;
  this.pause=pause;
  this.status=status;
  this.target=target;
  this.stat=text;
  this.pos=0;
  this.go=tickergo;
  this.setstat=tickerset;
  this.sethtml=tickerset2;
  this.cngtext=cngtext;
  this.recngtext=recngtext;
}

function cngtext(text) {
   this.oldtext=this.text;
   this.text=maketext(text,this.lengt,this.pause, this.status);
  }

function recngtext(){
  this.text=this.oldtext;
}

function maketext(text,lengt,pause,status) {
  var newtext='';
  if (status) for(var cnt=0; cnt<lengt; cnt++) newtext=newtext+' ';
  newtext=newtext+text;
  for(var cnt=0; cnt<pause; cnt++) newtext=newtext+' ';
  return newtext;
}

function tickergo(){
    this.pos =(this.pos<this.text.length)? this.pos+1 : 0;
    this.stat=(this.status) ? this.text.substr(this.pos,this.lengt): this.text.substring(0,this.pos);

    switch (this.target) {
    case 0:  eval(this.id+".setstat();"); break;
    case 1:  eval(this.id+".sethtml();"); break;
    case 2:  eval(this.id+".setstat();"); eval(this.id+".sethtml();"); break;
}

    setTimeout(this.id+".go()",this.speed);
    }


function tickerset(){
    status=this.stat;
}

function tickerset2(){
 if (document.all) {
    if (this.pos < this.length){
     eval("document.all."+this.id+"er.innerHTML = '<PRE>'+this.stat+'_</PRE>';");}
    else {
     eval("document.all."+this.id+"er.innerHTML = '<PRE>'+this.stat+'</PRE>';");}
   }
  else{

    eval("document."+this.id+"er.document.open();");
    eval("document."+this.id+"er.document.write('<PRE>"+this.stat+"</PRE>');");
    eval("document."+this.id+"er.document.close();");
 }
 }
