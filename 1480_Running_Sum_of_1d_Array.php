<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $result = [];
        for ($i = 0; $i < count($nums); $i++) {
            $sum = 0;
            for ($j = 0; $j < $i+1; $j++) {
                $sum += $nums[$j];
            }
            $result[] = $sum;
        }
        return $result;
    }
}

