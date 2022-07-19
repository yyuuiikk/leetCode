<?php

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function numberOfSteps($num) {
        // note: bit計算を行う回答
        // https://leetcode.com/problems/number-of-steps-to-reduce-a-number-to-zero/discuss/750470/Python%3A-Long-explanation-of-bit-count-method
        $bitstring = decbin($num);
        return strlen($bitstring) - 1 + mb_substr_count($bitstring, 1);

        // 別回答
        /*
        $count = 0;
        while ($num > 0) {
            if ($num % 2 === 0) {
                $num = intdiv($num, 2);
            } else {
                $num = $num - 1;
            }
            $count++;
        }
        return $count;
        */
    }
}
