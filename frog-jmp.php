<?php
/**
 * Created by PhpStorm.
 * User: bart
 * Date: 04/03/2017
 * Time: 14:14
 */

function solution($x, $y, $d) {
    return intval(ceil(($y - $x) / $d));
}

$min = 1;
$max = 1000000000;

for ($i = 0; $i<10; $i++) {
    $x = rand($min, $max);
    $y = rand($x, $max);
    $d = rand(1, $max);

    echo "$x : $y : $d => " . solution($x, $y, $d) . "\n";
}

