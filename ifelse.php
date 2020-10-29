<?php 

//$price = 40;

//if ($price < 30) {
//	echo 'condition is met';
//}else {
//	echo 'condition is not met';
//}

$fruitsAndPrice = array(
	array('name' => 'apple', 'price' => 10),
	array('name' => 'red apple', 'price' => 22),
	array('name' => 'green apple', 'price' => 32),
	array('name' => 'blue apple', 'price' => 43),
	array('name' => 'yellow apple', 'price' => 4),	
);

foreach($fruitsAndPrice as $fruit) {
	
	//if($fruit['price'] < 30 && $fruit['price'] > 4){
	//	echo $fruit['name'] . '<br />';
	//}
	
	//if($fruit['price'] > 20 || $fruit['price'] < 10){
	//	echo $fruit['name'] . '<br />';
	//}
	
}
?>

<!DOCTYPE html>
<html>
<head>

	<title>ifelse file</title>
	
</head>
<body>

	<div>
		<ol>
			<?php foreach($fruitsAndPrice as $fruit) { ?>
				<?php if($fruit['price'] > 10) { ?>
					<li><h2><?php echo 'fruit is ' . $fruit['name'] . ' price is $' . $fruit['price']; ?> </h2></li>
				<?php } ?>
			<?php } ?>
		</ol>
	</div>
	
</body>
</html>


<!-- 
<div> 
		<ul> 
			<?php foreach($fruitsAndPrice as $fruit){ ?>
				<?php if($fruit['price'] < 10) { ?>
					<li> <?php echo $fruit['name']; ?> </li>
				<?php } ?>
			<?php } ?>
		</ul>
</div>
-->
