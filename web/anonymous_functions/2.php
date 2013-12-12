<?php
$callback =function ($pricePerItem , $quantity, $productname) 
{
	$productname = strtoupper($productname);
	$total = ($pricePerItem * $quantity) ;//* ($tax + 1.0);
	
	
	echo $productname . '='. $total;
};
echo gettype($callback);//object
echo get_class($callback);// Closure
var_dump($callback);
$callback(5, 44, 'KinDle');
die();
//////////////////////////////////////////////////////////////////////////////////
$callback1 =function ($pricePerItem , $quantity, $productname) use ($tax) 
{
	$productname = strtoupper($productname);
	$total = $pricePerItem * $quantity *($tax + 1.0);
	
	
	echo $productname . '='. $total;
};

$callback1(5, 44, 'KinDle');
die('index testing');
