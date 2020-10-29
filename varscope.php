<?php 

// variable scope

// local variable

function myFunc(){
	$price = 20;
	echo "{$price} hai";
}

//myFunc();

//echo $price; //does not work coz only available in local scope

function myFunc2($args) {
	echo $args;
}

//myFunc2('hello');

//echo $args; //  does not work coz only available in local scope

// global variable

$name = 'dev';
/*
function sayHello(){
	global $name;
	$name = 'devraj';
	echo $name;
}

sayHello();
echo $name; // overrides intial value and outputs new value
			// because we declared $name global so it overrides initial value
*/

/*
function sayBye($name){
	$name = 'devraj';
	echo "bye {$name}";
}

sayBye($name);
echo $name; // does not override initial value $name in sayBye function works as local variable
			// when we use parameter inside function, it works as local variable
*/

/*
function sayBye(&$name){
	$name = 'devraj';
	echo "bye {$name}";
}

sayBye($name);
echo $name; // now when we use & for refrence then $name will be overrided 
			// even when we are passing it as argument or parameter inside function
*/


?>



<!DOCTYPE html>
<html>
<head>

	<title> Variable Scope </title>

</head>
<body>

	<h1>hello</h1>

</body>
</html>