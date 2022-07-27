<?php

class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        if ($a === '0' && $b === '0') return '0';

        $first = array_reverse(str_split($a));
        $second = array_reverse(str_split($b));

        $calc = [];
        $up = 0;
        for ($i = 0; $i < count($first) || $i < count($second); $i++) {
            $one = 0;
            if (isset($first[$i])) $one = (int)$first[$i];
            $two = 0;
            if (isset($second[$i])) $two = (int)$second[$i];

            $tmp = $one + $two + $up;
            if ($tmp < 2) {
                if ($tmp === 0) {
                    $up = 0;
                    $calc[] = '0';
                } else if ($tmp === 1) {
                    $up = 0;
                    $calc[] = '1';
                }
            } else {
                if ($tmp % 2 === 0) {
                    $up = $tmp / 2;
                    $calc[] = '0';
                } else if ($tmp % 2 !== 0) {
                    $up = (int)floor($tmp/2);
                    $calc[] = '1';
                }
            }
        }
        if ($up === 1) {
            $calc[] = 1;
        } else if ($up === 2) {
            $calc[] = 0;
            $calc[] = 1;
        } else if ($up === 3) {
            $calc[] = 1;
            $calc[] = 1;
        }

        $result = '';
        foreach (array_reverse($calc) as $val) {
            $result .= $val;
        }
        return $result;
    }
}

$sol = new Solution();
var_dump($sol->addBinary('1111', '1111'));
