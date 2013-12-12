<?php
//Там, где нужно указать название фукнции-обработчика (callback): можно делать это задав 
//1) имя функции строковой переменной
//2) класс-метод, объект-метод
//3) прописать анонимку прямо здесь

function dumper ($var, $type = 'vardump') {
	if($type === 'vardump'){
		var_dump($var);
		echo '
				---------
				';
	}else{
		print_r($var);
		echo '
				-------printr--
				';
	}
}
$arr = array('abcd',
		'kolya'=>33,
		'brother'=>'liam',
		4545);

 array_walk($arr, 'dumper');
 echo '
 		anonymous
 		';
 
 array_walk($arr, function  ($var) {
		var_dump($var);
		echo '
				---------
				';
});
 
 
// еще один пример:
 	echo preg_replace_callback('~-([a-z])~', function ($match) {
 		return strtoupper($match[1]);
 	}, 'hello-world');
 	

// die('simple');