var userC = document.getElementById("userC")
var userR = document.getElementById("userR")
var compC
var userP = 0, compP = 0
userR.onclick = function () {
	document.getElementById("ust").style.left = '0px'
	document.getElementById("cst").style.left = '0px'
	document.getElementById("dr").style.top = '0px'
	document.getElementById("lo").style.top = '0px'
	document.getElementById("wi").style.top = '0px'
	document.getElementById("cpr").style.left = '0px'
	document.getElementById("csc").style.left = '0px'
	document.getElementById("upr").style.left = '0px'
	document.getElementById("usc").style.left = '0px'
}
userC.onclick = function () {
	if(document.getElementById('stone').checked) {
		document.getElementById("ust").style.left = '180px'
	  	compC = Math.floor((Math.random() * 3) + 1);
	  if (compC == 1) {
	  	document.getElementById("cst").style.left = '-180px'
	  	document.getElementById("dr").style.top = '150px'
	  }else if(compC == 2){
	  	document.getElementById("cpr").style.left = '-180px'
	  	document.getElementById("lo").style.top = '150px'
	  	document.getElementById("compP").innerHTML = ++compP;
	  }else{
	  	document.getElementById("csc").style.left = '-180px'
	  	document.getElementById("wi").style.top = '150px'
	  	document.getElementById("userP").innerHTML = ++userP;
	  }
	}else if(document.getElementById('paper').checked) {
	  document.getElementById("upr").style.left = '180px'
	  	compC = Math.floor((Math.random() * 3) + 1);
	  if (compC == 1) {
	  	document.getElementById("cst").style.left = '-180px'
	  	document.getElementById("wi").style.top = '150px'
	  	document.getElementById("userP").innerHTML = ++userP;
	  }else if(compC == 2){
	  	document.getElementById("cpr").style.left = '-180px'
	  	document.getElementById("dr").style.top = '150px'
	  }else{
	  	document.getElementById("csc").style.left = '-180px'
	  	document.getElementById("lo").style.top = '150px'
	  	document.getElementById("compP").innerHTML = ++compP;
	  }
	}else if(document.getElementById('scissor').checked){
		document.getElementById("usc").style.left = '180px'
	  	compC = Math.floor((Math.random() * 3) + 1);
	  if (compC == 1) {
	  	document.getElementById("cst").style.left = '-180px'
	  	document.getElementById("lo").style.top = '150px'
	  	document.getElementById("compP").innerHTML = ++compP;
	  }else if(compC == 2){
	  	document.getElementById("cpr").style.left = '-180px'
	  	document.getElementById("wi").style.top = '150px'
	  	document.getElementById("userP").innerHTML = ++userP;
	  }else{
	  	document.getElementById("csc").style.left = '-180px'
	  	document.getElementById("dr").style.top = '150px'
	  }
	}else{
		alert("choose something Idiot")
	}
}