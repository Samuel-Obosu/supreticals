Hello TEAM;
In this video we will go through the ff steps to get the desired output

1) First replace the validation.js in js folder with the new one
2) Also replace the style.css in css folder with the new one 
3) Find a question that requires the dropdown in the pdf
3) Find it in the code and  then add the code in the detail.php after it
4) In the first div add the id to "hCOLUMNNAME" e.g COlUMNNAME=DiagA so id="hDiagA"
5) In the two inputs, call the port( selectionId, hiddenDivId), so e.g: ; 
	<input name="DiagA" id="DiagA" value="YES" onchange="port('DiagA','hDiagA')">Yes</input>
	<input name="DiagA" id="DiagA" value="NO" onchange="port('DiagA','hDiagA')">No</input>
6) Also change the value of the first <input> within the hidden div to the id of the above so for example
	<input type="text" name="dDiagNo"  value="DIAGA" hidden="true">
