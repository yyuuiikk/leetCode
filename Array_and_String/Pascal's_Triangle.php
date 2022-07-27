<?php

class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows) {
        $result = [];
        for ($i = 0; $i < $numRows; $i++) {
            if ($i === 0) {
                $result[] = [1];
                continue;
            } elseif ($i === 1) {
                $result[] = [1,1];
                continue;
            }

            $tmp = [];
            $tmp[] = 1;
            foreach ($result[$i-1] as $key => $item) {
                if ($key !== 0) {
                    $sum = $result[$i-1][$key-1] + $item;
                    $tmp[] = $sum;
                }
            }
            $tmp[] = 1;
            $result[] = $tmp;
        }
        return $result;
    }
}

//$sol = new Solution();
//var_dump($sol->generate(5));
