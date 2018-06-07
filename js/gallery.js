// JavaScript Document
var stt=1;
var tonganh=5;
function taitunganh(x){
	
	var anhvao=document.getElementById("anh");
	var sos=document.getElementsByClassName("s");
	anhvao.src="images/s"+x+".jpg";
	 for (i = 0; i <sos.length; i++) {
        sos[i].className = sos[i].className.replace(" active", "");
    }
		 sos[x-1].className += " active";
}
	

function taianhtoilui(x){
	
	var anhvao=document.getElementById("anh");
	var soA=document.getElementsByClassName("s");
	stt=stt+x;
	if(stt>tonganh){ stt=1}
	if(stt<1){stt=tonganh}	
	anhvao.src="images/s"+stt+".jpg"
	for(i=0;i<soA.length;i++){
	       soA[i].className = soA[i].className.replace("active", "");
    }
		 soA[stt-1].className += " active";
}
	

window.setInterval(
function taianhtoilui(){
	stt=stt+1;
	if(stt>tonganh){ stt=1}
	if(stt<1){stt=tonganh}	
	var anhvao=document.getElementById("anh");
	anhvao.src="images/s"+stt+".jpg"
	},5000);