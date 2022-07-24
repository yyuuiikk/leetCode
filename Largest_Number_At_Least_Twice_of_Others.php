<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function dominantIndex($nums) {
        $max = 0;
        $max_idx = -1;
        foreach ($nums as $key => $num) {
            if ($key === 0) {
                $max = $num;
                $max_idx = $key;
                continue;
            }

            if ($num > $max) {
                if ($num >= $max*2) {
                    $max_idx = $key;
                } else {
                    $max_idx = -1;
                }
                $max = $num;
            } else {

                if ($num*2 > $max) $max_idx = -1;
            }
        }
        return $max_idx;
    }
}

$sol = new Solution();
var_dump($sol->dominantIndex([3,6,1,0]));