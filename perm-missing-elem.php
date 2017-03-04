<?php
/**
 * Created by PhpStorm.
 * User: bart
 * Date: 04/03/2017
 * Time: 14:41
 */

function solution($a) {

    $y = ((count($a) + 1) * (count($a) + 2)) / 2; // partial sum (max sum)
    $z = array_sum($a); // sum of array elements (actual sum)
    return $y - $z; // difference = missing number

}

// sample input (missing: 4)
$a = array(2, 3, 1, 5);

echo solution($a) . "\n";