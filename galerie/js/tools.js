 var ns = (document.layers)? true:false
 var ie = (document.all)? true:false

function init() {
 document.onmousedown = mouseDown
 if (ns) document.captureEvents(Event.MOUSEDOWN)
    }

function mouseDown(e) {
  if (ie && event.button==2) {
     alert('Für download der Bilder mailto: ichhab@lustauffotos.de'); 
     return false
    }
  if (ns && e.which==3) return false
         }

function wechsel(url1,id1,url2,id2)
   {  
    parent.frames[id1].location.href=url1;
    parent.frames[id2].location.href=url2;
   }
  
function win(url)
{
f1=window.open(url,"Fenster1","width=800,height=600,screenX=0,screenY=0, resizable=yes,scrollbars");
self.focus();
}

function click() {
	
 if ((Math.round(Math.random()*7)>=5) && ie) parent.frames[1].document.all.tags("a")[Math.round(Math.random()*(parent.frames[1].document.all.tags("a").length-1))].click();
 parent.frames[0].location.href='start.html';
}
