function loadform(){
	if(document.getElementById('pentecoast').checked){
		document.getElementById('cop').style.display="inline";
		document.getElementById('asso').style.display="none";
	}else{
		document.getElementById('cop').style.display="none";
		document.getElementById('asso').style.display="inline";
	}
}

function port(selected, displayId){
	if(document.getElementById(selected).checked){
		document.getElementById(displayId).style.display="inline";
	}else{
		document.getElementById(displayId).style.display="none";
	}
}
