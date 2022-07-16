<?php

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function numberOfSteps($num) {
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
    }
}
