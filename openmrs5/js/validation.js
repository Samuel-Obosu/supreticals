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
		document.getElementById(displayId).setAttribute('required', true);
	}else{
		document.getElementById(displayId).removeAttribute('required');
		document.getElementById(displayId).style.display="none";
	}
}

function showHint(str) {
         if (str.length==0) {
           document.getElementById("txtHint").innerHTML = "";
           return;
       }

      if (window.XMLHttpRequest) {
        		// code for IE7+, Firefox, Chrome, Opera, Safari
        		xmlhttp=new XMLHttpRequest();
      	} else { // code for IE6, IE5
        		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      	}
      	xmlhttp.onreadystatechange=function() {
        		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
          			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
        		}
          }
           xmlhttp.open("GET", "actions/gethint.php?q="+str, true);
           xmlhttp.send();
    }

		function record(rel,age, status) {
		  var nRel=document.getElementById(rel).value;
		  var nAge=document.getElementById(age).value;
		  var nStatus=document.getElementById(status).value;
		  //var send="recordFam.php?rel="+nRel+"&age="+nAge+"&stat="+nStatus;

		   if (nAge == "" || nAge<=0) {
		       document.getElementById("demo").innerHTML = "Wrong Age entered";
		       return;
		   }

		  if (window.XMLHttpRequest) {
		    		// code for IE7+, Firefox, Chrome, Opera, Safari
		    		xmlhttp=new XMLHttpRequest();
		  	} else { // code for IE6, IE5
		    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  	}
		  	xmlhttp.onreadystatechange=function() {
		    		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		      			document.getElementById("result").innerHTML=xmlhttp.responseText;
		    		}
		      }
		       xmlhttp.open("GET", "actions/recordfam.php?rel="+nRel+"&age="+nAge+"&stat="+nStatus, true);
		       xmlhttp.send();
		}

function conf(rel, age, status){
	//(rel, age, status,canc,hcanc,diab,hdp,hkd,nmd,tb,hd){
		  var disp="Please confirm the entered details";
		  disp+="\nRelation: ";
		  disp+=document.getElementById(rel).value;
		  disp+="\nAge: ";
		  disp+=document.getElementById(age).value;
		  disp+="\n Status: ";
		  disp+=document.getElementById(status).value;
			//disp+="\n Cancer: ";
			//isChecked(canc,dcanc,disp);

		  if(confirm(disp)==true){
		    record(rel, age, status);
		  }else {
		    document.getElementById("demo").innerHTML=" Wrong";
		  }
}

function isChecked(elmt,hElmt,displ){
	if(document.getElementById('elmt').checked){
		displ+=document.getElementById('hElmt').value;
	}else{
		displ+="";
	}
}

function  displOnPage(str,page,vDiv)
{
  	if (window.XMLHttpRequest) {
    		// code for IE7+, Firefox, Chrome, Opera, Safari
    		xmlhttp=new XMLHttpRequest();
  	} else { // code for IE6, IE5
    		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
  	xmlhttp.onreadystatechange=function() {
    		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      			document.getElementById(vDiv).innerHTML=xmlhttp.responseText;
    		}
	}
  	xmlhttp.open("GET",page+"?file="+str,true);
  	xmlhttp.send();
}

function prompt(){
	if(confirm("Are you sure of the details entered?")== true){
		document.getElementById('record').type="submit";
	}
}
