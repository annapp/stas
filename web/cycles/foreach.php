<?php
class Home {
	public $mirror = true;
	public $chair= true;
	public $table = true;
	public $armchair = false;
	
	function __construct() {
		;
	}
}

$home = new Home;
foreach ($home as $value) {
	var_dump($item);
}


class Home {
	public static $mirror = true;
	public static $chair= true;
	public static $table = true;
	public static $armchair = false;

	function __construct() {
		;
	}
}

echo Home::mirror();


Interface Abcd {
	
}