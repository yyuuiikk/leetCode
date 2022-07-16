<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $result = [];
        for ($i = 0; $i < count($nums); $i++) {
            if ($result !== []) {
                $result[] = $result[$i-1] + $nums[$i];
            } else {
                $result[] = $nums[$i];
            }
        }
        return $result;
    }
}
