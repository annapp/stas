<?php
// $i=1;
// $limit = 5;
// $step = 1;
//    for ($i = $start; $i <= $limit; $i += $step) {
//             yield $i;
//         }



function xrange($start, $limit, $step = 1) {
	if ($start < $limit) {
		if ($step <= 0) {
			throw new LogicException('Step must be +ve');
		}

		for ($i = $start; $i <= $limit; $i += $step) {
			yield $i;
		}
	} else {
		if ($step >= 0) {
			throw new LogicException('Step must be -ve');
		}

		for ($i = $start; $i >= $limit; $i += $step) {
			yield $i;
		}
	}
}
