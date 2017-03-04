<?php
/**
 * Created by PhpStorm.
 * User: bart
 * Date: 03/03/2017
 * Time: 23:57
 */

function solution($a, $k) {
    if (! count($a)) {
        return $a;
    }
    $k = $k % count($a);
    return array_merge(array_slice($a, -$k), array_slice($a, 0, -$k));
}

$a = array(3, 8, 9, 7, 6);
$k = 9;

print_r(solution($a, $k));