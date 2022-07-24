<?php

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    function spiralOrder($matrix) {
        $row_begin = 0;
        $row_end = count($matrix)-1;
        $col_begin = 0;
        $col_end = count($matrix[0])-1;


        $result =  [];

        while ($row_begin <= $row_end && $col_begin <= $col_end) {
            for ($i = $col_begin; $i <= $col_end; $i++) {
                $result[] = $matrix[$row_begin][$i];
            }
            $row_begin++;

            for ($i = $row_begin; $i <= $row_end; $i++) {
                $result[] = $matrix[$i][$col_end];
            }
            $col_end--;

            if ($row_begin <= $row_end) {
                for ($i = $col_end; $i >= $col_begin; $i--) {
                    $result[] = $matrix[$row_end][$i];
                }
            }
            $row_end--;

            if ($col_begin <= $col_end) {
                for ($i = $row_end; $i >= $row_begin; $i--) {
                    $result[] = $matrix[$i][$col_begin];
                }
            }
            $col_begin++;
        }

        return $result;
    }
}

//$sol = new Solution();
//var_dump($sol->spiralOrder([[1,2,3],[4,5,6],[7,8,9]]));
