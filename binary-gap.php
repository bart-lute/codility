<?php
/**
 * Created by PhpStorm.
 * User: bart
 * Date: 03/03/2017
 * Time: 21:27
 */

function solution($n)
{
    $str = decbin($n); // bin string of n

    $mg = 0; // max gap
    $cg = 0; // current gap
    for ($i=0; $i<strlen($str); $i++) {
        if ($str[$i] == '0') {
            $cg++;
        } else {
            if ($cg > $mg) {
                $mg = $cg;
            }
            $cg = 0;
        }
    }
    return $mg;

}

// rand int
$n = rand(0, 2147483647);
$n = 328;
$n = 6;

echo solution($n) . "\n";
