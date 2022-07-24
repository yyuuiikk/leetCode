<?php

class Solution {

    /**
     * @param Integer[][] $mat
     * @return Integer[]
     */
    function findDiagonalOrder($mat) {
        $i_length = count($mat);
        $j_length = count($mat[0]);

        $d = [];
        for ($i = 0; $i < $i_length; $i++) {
            for ($j = 0; $j < $j_length; $j++) {
                if (!array_key_exists($i+$j, $d)) {
                    $d[$i+$j] = [];
                }
                $d[$i+$j][] = $mat[$i][$j];
            }
        }

        $result = [];
        foreach ($d as $key => $val) {
            if ($key % 2 === 0) {
                $val = array_reverse($val);
            }
            foreach ($val as $val_val) {
                $result[] = $val_val;
            }
        }

        return $result;
    }
}

$sol = new Solution();
var_dump($sol->findDiagonalOrder([[1,2],[3,4]]));