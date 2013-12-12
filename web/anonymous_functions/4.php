<?php
function getClosure()
{
	$g = 'test';

	$c = function($a, $b) use($g){
		echo $a . $b . $g;
	};

	$g = 'test2';

	return $c;
}

$closure = getClosure();
$closure(1, 3); //13test

getClosure()->__invoke(1, 3); //13test