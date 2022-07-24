<?php

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $reverse_digits = array_reverse($digits);
        $result = [];
        $is_ten = false;
        foreach ($reverse_digits as $key => $reverse_digit) {
            if ($key === 0) {
                $val = $reverse_digit + 1;
                if ($val === 10) {
                    $is_ten = true;
                    $result[] = 0;
                } else {
                    $result[] = $val;
                }
                continue;
            }

            $val = $reverse_digit;
            if ($is_ten) $val += 1;

            if ($val === 10) {
                $is_ten = true;
                $result[] = 0;
            } else {
                $is_ten = false;
                $result[] = $val;
            }
        }
        if ($is_ten) $result[] = 1;

        return array_reverse($result);
    }
}

//$sol = new Solution();
//var_dump($sol->plusOne([9]));