<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function pivotIndex($nums) {
        $pivot = -1;
        $left_sum = 0;
        foreach ($nums as $key => $val) {
            // note: left_sum をarray_sum() で求めるとタイムアウトしたため加算で計算
            if ($key !== 0) $left_sum += $nums[$key-1];
            $right_sum = array_sum(array_slice($nums, $key+1));

            if ($left_sum === $right_sum) {
                $pivot = $key;
                break;
            }
        }
        return $pivot;
    }
}


//$sol = new Solution();
//var_dump($sol->pivotIndex([1,7,3,6,5,6]));