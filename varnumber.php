<?php 

//$radius = 1;
//$pi = 22/7;
//$area = $pi * ($radius ** 2);

//echo $area;

// number function

//echo floor($pi);

//echo ceil($pi);

//echo pi();

//$dev = ['dev', 'parash'];

//$dev = array('dev', 'parash!');

//echo $dev[1];

//array_push($dev, 'suggie');

//print_r($dev);
//associative array
//$dev = array(
//	'dev' => 'male',
//	'suggi'=> 'female'
//);

//echo $dev['suggi'];

//print_r($dev);

//$blogs = [
//	['title' => 'dev rocks', 'author' => 'parash', 'content' => 'lorem', 'likes' => 10],
//	['title' => 'devraj rock', 'author' => 'par', 'content' => 'lorem', 'likes' => 12]
//];

//echo $blogs[0]['title'];

//echo $blogs[1]['title'];

//echo count($blogs);

//$blogs[] = ['title' => 'devr', 'author' => 'd', 'content' => 'lorem', 'likes' => 2];

//print_r($blogs);

//$popped = array_pop($blogs);

//print_r($popped);


// for loop

/*
$names = array('dev', 'parash', 'suggi');


for($i = 0; $i < count($names); $i++){
	echo $names[$i] . '<br />';
}
*/

//foreach loop

/*
$products = ['mango', 'apple', 'tomato'];

foreach($products as $product) {
	echo $product . '<br />';
}
*/

//while loop

/*
$products = ['mango', 'apple', 'tomato'];

$i = 0;
while($i < count($products)){
	echo $products[$i] . '<br />';
	$i++;
}
*/

// echo out fruit name with its respective price

$fruitsAndPrice = array(
	array('name' => 'apple', 'price' => 10),
	array('name' => 'red apple', 'price' => 11),
	array('name' => 'green apple', 'price' => 12),
	array('name' => 'blue apple', 'price' => 13),
	array('name' => 'yellow apple', 'price' => 14),	
);
/*
foreach($fruitsAndPrice as $fruit){
	echo $fruit['name'] . ' - $' . $fruit['price'];
	echo '<br />';
}
*/

?>

<!DOCTYPE html>
<html>
<head>

	<title>php file</title>
	
</head>
<body>

	<h1>fruits&price</h1>
	<ul>
	<?php foreach($fruitsAndPrice as $fruit){ ?>
		
		<h3> <?php echo $fruit['name']; ?> </h3>
		<p>$ <?php echo $fruit['price']; ?> </p>
		
	<?php } ?>
	</ul>
	
</body>
</html>


























 