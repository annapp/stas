<?php
// for ($i = 1; $i <= 10; $i++) {
// 	echo $i;
// }




//////////////////
// $i = 1;
// for (; ; ) {
// 	if ($i > 10) {
// 		break;
// 	}
// 	echo $i;
// 	$i++;
// }

// между двумя двоеточиями задаются:
// ;;
// действие в первой итерации
// условие
// действие на каждой итерации
/* пример 4 */
for ($i = 1, $j = 0, $d=100, $b=2;

		$i <= 10;

		 print $i, $i++,$j += $i, $d+=100, $b+=2) {
		 	
		 	
	echo '
			i='. $i.'j='.$j.'d='.$d.'b='.$b;
	return;
}
