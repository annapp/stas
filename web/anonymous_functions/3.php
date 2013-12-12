

<?php 

$g = 'test';

$c = function($a, $b) use($g){
    echo $a . $b .  $g;
};

$g = 'test2';

var_dump($c);
;
$var1 = array('abcd', 4=>55);



/*
 * 
 * подразумеват такую структуру:
 object(Closure)#1 (2)
 {
["static"]=> array(1) { ["g"]=> string(4) "test" }
["parameter"]=> array(2) {
["$a"] => string(10) ""
["$b"]=> string(10) ""
}
}
*/