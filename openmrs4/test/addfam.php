<!-- //add family testing -->
<html>
<head>
<script>
function record(rel,age, status) {
  var nRel=document.getElementById(rel).value;
  var nAge=document.getElementById(age).value;
  var nStatus=document.getElementById(status).value;
  var send="recordFam.php?rel="+nRel+"&age="+nAge+"&stat="+nStatus;
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
      			document.getElementById("demo").innerHTML=xmlhttp.responseText;
    		}
      }
       xmlhttp.open("GET", "recordfam.php?rel="+nRel+"&age="+nAge+"&stat="+nStatus, true);
       xmlhttp.send();
}

function conf(rel, age, status){
  var disp="Please confirm the entered details";
  disp+="\nRelation: ";
  disp+=document.getElementById(rel).value;
  disp+="\nAge: ";
  disp+=document.getElementById(age).value;
  disp+="\n Status: ";
  disp+=document.getElementById(status).value;

  if(confirm(disp)==true){
    record(rel, age, status);
  }else {
    document.getElementById("demo").innerHTML=" Wrong";
  }
}
</script>
</head>
<body>
    <p id="demo">Enter</p>
<p><b>Start typing a name in the input field below:</b></p>

<label id="info">INFO:<input type="text" id="num" value="0"></label><br>
Relation:<select id="rel">
      <option value="Father">Father</option>
      <option value="Mother">Mother</option>
      <option value="Bother">Bother</option>
      <option value="Sister">Sister</option>
</select>
<br><input type="number" id="age">
<br><select id="status">
    <option value="Alive">Alive </option>
    <option value="Dead">Dead</option>
</select>
<br><button id="record" onclick="conf('rel', 'age', 'status');">Record Family Info</button>
First name: <input type="text" onkeyup="showHint(this.value)">
<p>Suggestions: <span id="txtHint"></span></p>
</body>
</html>
