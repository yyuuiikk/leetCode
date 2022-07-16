<?php

class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        $result = [];
        for ($i=1; $i <= $n; $i++) {
            if ($i % 15 === 0) {
                $result[] = 'FizzBuzz';
            } elseif ($i % 5 === 0) {
                $result[] = 'Buzz';
            } elseif ($i % 3 === 0) {
                $result[] = 'Fizz';
            } else {
                $result[] = (string)$i;
            }
        }
        return $result;
    }
}

$sol = new Solution();
print_r($sol->fizzBuzz(20));