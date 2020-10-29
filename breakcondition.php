<?php 

$products = [
	['name' => 'apple1', 'price' => 10],
	['name' => 'apple2', 'price' => 20],
	['name' => 'apple3', 'price' => 30],
	['name' => 'apple4', 'price' => 40],
	['name' => 'apple5', 'price' => 50]
];

foreach($products as $product){
	
	if($product['name'] === 'apple4'){
		break;
	}
	
	if($product['price'] > 20){
		continue;
	}
	
	echo $product['name'] . '<br />';
	
}










?>