<?php
/**
 * Created by PhpStorm.
 * User: bart
 * Date: 03/03/2017
 * Time: 23:27
 */

function solution($a) {

    $b = 0;
    foreach ($a as $v) {
        $b = $b ^ $v; // xor
    }

    return $b;
}

// test input
$arr = array(9, 3, 9, 3, 9, 7, 9);

echo solution($arr) . "\n";