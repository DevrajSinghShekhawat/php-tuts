<?php 

// functions

function sayHello($name = 'devraj', $time = 'morning') {
	//echo 'hello ' . $name . ' good ' . $time . '<br />';
	echo "hello {$name} good {$time}";
}

sayHello('dev', 'evening');

function formatFruit($fruit){
//echo "{$fruit['name']} costs $ {$fruit['price']} to buy <br />";
//echo $fruit['name'] . ' costs $ ' . $fruit['price'] . ' to buy <br />';
return "{$fruit['name']} costs $ {$fruit['price']} to buy <br />";
}

//$formatted = formatFruit(['name' => 'apple', 'price' => 20]);

//echo $formatted;

?>

<!DOCTYPE html>
<html>
<head>

	<title> PHP functions </title>

</head>
<body>

	<!--<h2><?php echo $formatted; ?></h2>-->

</body>
</html>