// we need to read the data entered by user

// we will update it in variables

// we will check which button has been pressed by the user

// excute a subrotine that is defined for individual buttons as per the user button press input
window.onload = function()
{
	// add event listeners to buttons
	document.getElementById('add_btn').addEventListener('click',addition);
	document.getElementById('sub_btn').addEventListener('click',subtraction);
	document.getElementById('mul_btn').addEventListener('click',multiplication);
	document.getElementById('div_btn').addEventListener('click',division);

}

function addition()
{
	// console.log("I am in addition block");
	var x = document.getElementById('num1').value;
	var y = document.getElementById('num2').value;
	var z;
	z = parseFloat(x)+parseFloat(y);
	document.getElementById('result').innerHTML = z;
	// console.log(x);
	// console.log(y);
	// console.log(z);
}

function subtraction()
{
	// console.log("I am in subtraction block");
	var x = document.getElementById('num1').value;
	var y = document.getElementById('num2').value;
	var z;
	z = parseFloat(x)-parseFloat(y);
	document.getElementById('result').innerHTML = z;
}

function multiplication()
{
	//console.log("I am in multiplication block");
	var x = document.getElementById('num1').value;
	var y = document.getElementById('num2').value;
	var z;
	z = parseFloat(x)*parseFloat(y);
	document.getElementById('result').innerHTML = z;
}

function division()
{
	//console.log("I am in division block");
	var x = document.getElementById('num1').value;
	var y = document.getElementById('num2').value;
	var z;
	z = parseFloat(x)/parseFloat(y);
	document.getElementById('result').innerHTML = z;
}
