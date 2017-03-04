<?php
/**
 * Created by PhpStorm.
 * User: bart
 * Date: 04/03/2017
 * Time: 16:41
 */

function solution($a) {

    $d = array_sum($a); // sum of all elements
    $x = PHP_INT_MAX; // the highest possible number

    for ($i=0; $i<(count($a) -1); $i++) {
        $d -= $a[$i] * 2; // the delta de/increases by 2 * the current value on every iteration
        $x = min(abs($d), $x); // save the lowest
    }

    return $x;
}

// sample array
$a = array(3, 1, 2, 4, 3);

echo solution($a) . "\n";