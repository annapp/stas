<?php 
// , Book $book, $params  = array()

$var1 = 'abcd';
$var2 = 33;
$var4 = 55.1;
$hello = function ($user){
// 	global $var1;
	echo $var1;
	$hello_message='Hello ';
	return $hello_message.$user;
	
};
echo $hello('Ivan');
die();
// echo hello_user('Igor');

Class Book {
	public $author;
	public $name;
	
// метод	
	public function info(){
		echo '
				autor is ' . $this->author;
		echo '
				name is ' . $this->name;
		$this->helper();

	}
	public function helper(){
	}
	
}

class Home		{
	public $mirror=false;
	public $chair=false;
	public $armchair=false;
	
	
	public function count_items(){
		$count=$this->mirror+$this->chair+$this->armchair;
		
		return $count;
	}
}

$myhome = new Home;
var_dump($myhome);
$myhome->mirror = true;
$myhome->chair = true;
var_dump($myhome);
echo $myhome->count_items();


// $mybook = new Book;
// $mybook1 = new Book;
// $mybook2 = new Book;
// $mybook->info();

class tree	{
	public $var;
	
	public function dosome (){	
		
	}
}

$var1 = new tree;

class BooleanValidator	{
	public $var;
	
	public static function Check ($value){
		
		if (is_bool($value)){
			$result = 'is boolean';
		}else{
			$result = 'is NOT boolean';
			
		}
		return $result;
	}
}

echo BooleanValidator::Check($B);




// $a = 0;
// $a = array()
// ''
// 		null
		
if ($a ==$_COOKIE= false){
	$result = 'is boolean';
}else{
	$result = 'is NOT boolean';
		
}
