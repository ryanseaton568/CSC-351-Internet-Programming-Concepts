//Joseph Seaton

window.onload = init;
function init() {
	var button = document.getElementById("addWords");
	button.onclick = handleButtonClick;
}// end function

function handleButtonClick() {
	var myTerm = document.getElementById("myTerm");
	var termName = myTerm.value;
	var myDefinition = document.getElementById("myDefinition");
	var defName = myDefinition.value;
	var dt = document.createElement("dt");
	dt.innerHTML = termName;
	var dl = document.getElementById("definition");
	dl.appendChild(dt);
	var dd = document.createElement("dd");
	dd.innerHTML = defName;
	var dl = document.getElementById("definition");
	dl.appendChild(dd);
	
}// end function