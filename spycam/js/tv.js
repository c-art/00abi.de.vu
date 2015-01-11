function tgif(id,fname,anz){
 this.id=id;
 this.frame=new Array();
 this.max=anz;
 for (var i=0; i<=this.max; i++) this.frame[i] = fname+i;
 this.now=1;
 this.stop=true;
 this.after=false;
 this.open1=open1;
 this.go=go;
 this.go2=go2;
 this.close=close;
 this.loop2=loop2;
 this.loop=loop;
 this.reset=reset;
 this.set=set;
 this.setakt=setakt;
 }
   
 function preload(id,src) {
  if (document.images) {
   eval(id+' = new Image()')
   eval(id+'.src = "'+src+'"')
	}
  }
  
 function setakt(to) { 
  if (to<=this.max) this.now=to;
 }
 
 function open1(nr) {
 	this.stop=false;
 	eval(this.id+".go("+nr+",false);");
 } 
 	
 function close(nr) {
        this.now=this.max;
 	this.stop=false;
 	eval(this.id+".go2("+nr+",false);");
  }
 function loop(nr) {
 	this.stop=false;
 	eval(this.id+".go("+nr+",true);");
 }
 
 function loop2(nr) {
 	this.stop=false;
 	this.after=true;
 	eval(this.id+".go("+nr+",false);");
  }
 
 function go(nr,unti){
    this.now++;        
    if (!this.stop) eval(this.id+".set("+nr+");");
    if (this.now>=this.max) if(unti) this.now=1; else this.stop=true;
    var timeout=eval(this.id+this.now);
    if (!this.stop) setTimeout(this.id+".go("+nr+","+unti+")",timeout);
      else if(this.after) {
         this.stop=false; 
         setTimeout(this.id+".go2("+nr+","+unti+")",timeout); 
        }
    }
  
 function go2(nr,unti){
    this.now--;        
    if (!this.stop) eval(this.id+".set("+nr+");");
    if (this.now<=1) if(unti) this.now=1; else this.stop=true;
    var timeout=eval(this.id+this.now);
    if (!this.stop) setTimeout(this.id+".go2("+nr+","+unti+")",timeout);
      else if(this.after) {
        this.stop=false; 
        setTimeout(this.id+".go("+nr+","+unti+")",timeout); 
       }
  }
    
 function set(nr){
  if (document.all)  window.document.images[nr].src = eval(this.frame[this.now]+".src");
  if (document.layers)  window.document.layers[nr].document.images[0].src = eval(this.frame[this.now]+".src");
  }

 function reset(nr){
 	this.stop=true; 	
	this.now=0;
	eval(this.id+".set("+nr+");");
 }