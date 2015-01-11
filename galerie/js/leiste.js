 function tdivimg(id,pos,step,speed,stop){
  this.id=id;
  this.speed=speed;
  this.step=step;
  this.pos=pos
  this.start=pos
  this.stop=stop;
  this.draw=draw;
  this.openit=openit;
  this.closeit=closeit;
}

function draw(url,top,zindx,sonst){
  document.writeln("<STYLE type=text/css>");
  document.writeln("#"+this.id+" {position:absolute; top:"+top+"; left:"+this.pos+"; z-index:"+zindx+";}");
  document.writeln("</STYLE>");
  document.writeln("<DIV id="+this.id+">");
  document.writeln("<IMG src="+url+" "+sonst+">");
  document.writeln("</DIV>");
}

function openit(where) {
    this.pos=this.pos+this.step;        
    if (document.layers) eval('parent.frames['+where+'].document.'+this.id+'.left='+this.pos+';');
    else if (document.all) eval('parent.frames['+where+'].document.all.'+this.id+'.style.left='+this.pos+';');
     if (this.pos<this.stop) setTimeout(this.id+'.openit('+where+')',this.speed);
   }

function closeit(where) {
    this.pos=this.pos-this.step;        
    if (document.layers) eval('parent.frames['+where+'].document.'+this.id+'.left='+this.pos+';');
    else if (document.all) eval('parent.frames['+where+'].document.all.'+this.id+'.style.left='+this.pos+';');
     if (this.pos>this.start) setTimeout(this.id+'.closeit('+where+')',this.speed);
   }