function dogsAgeJS(age) {
	return age * 7;
} //end function dogsAge

function rectangleAreaJS(width, height) {
	var area = width * height;
	return area;
}//end function rectangleArea

function addUpJS(numArray){
	var num1HTML = document.getElementById("num1").value;
	var num2HTML = document.getElementById("num2").value;
	var num3HTML = document.getElementById("num3").value;
	var num4HTML = document.getElementById("num4").value;
	var multi = (num1HTML * num2HTML * num3HTML * num4HTML);
	return multi;
}

function getAvatarJS(points) {
	var avatar;
	if (points < 100) {
		avatar = "Mouse";
	}//end if
	else if (points > 100 && points < 1000) {
		avatar = "Cat";
	}//end else if
	else {
		avatar = "Ape"
	}//end else
		return avatar;
}//end function

window.onload = go;

function go(){
	var button = document.getElementById("myButton");
	button.onclick = everythingJS;
}//end function go

function everythingJS(){
	var ageHTML = document.getElementById("dogAge").value;
	var widthHTML = document.getElementById("rectWidth").value;
	var heightHTML = document.getElementById("rectHeigth").value;
	var pointsHTML = document.getElementById("points").value;
	var num1HTML = document.getElementById("num1").value;
	var num2HTML = document.getElementById("num2").value;
	var num3HTML = document.getElementById("num3").value;
	var num4HTML = document.getElementById("num4").value;
	var myDogsAge = dogsAgeJS(ageHTML);
	var rectArea = rectangleAreaJS(widthHTML, heightHTML);
	var theTotal = addUpJS([num1HTML, num2HTML, num3HTML, num4HTML]);
	var myAvatar = getAvatarJS(pointsHTML);
	alert("My Dogs age is " + myDogsAge + "." + "\nThe Area of the rectangle is " + rectArea + "." + "\nThe total of the numbers is " + theTotal + "." + "\nMy Avatar is " + myAvatar + ".");
	var myAlert = ("My Dogs age is " + myDogsAge + "." + "\nThe Area of the rectangle is " + rectArea + "." + "\nThe total of the numbers is " + theTotal + "." + "\nMy Avatar is " + myAvatar + ".");
	var li = document.createElement("li");
	li.innerHTML = myAlert;
	var ul = document.getElementById("listJS");
	ul.appendChild(li);
	
}//end function everythingJS

