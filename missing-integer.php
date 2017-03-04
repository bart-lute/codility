<?php
/**
 * Created by PhpStorm.
 * User: bart
 * Date: 04/03/2017
 * Time: 20:12
 */

function solution($a) {

    $b = array(); // indexes

    foreach ($a as $v) {
        $b[$v] = true; // fill index
    }

    for ($i=1; $i<=count($a) + 1; $i++) {
        if (!isset($b[$i])) {   // check if index exists
            return $i;
        }
    }

}

// sample
$a = array(1, 3, 6, 4, 1, 2);

echo solution($a) . "\n";