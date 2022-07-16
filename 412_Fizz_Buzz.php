<?php

class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        return array_map(function ($value) {
            if ($value % 15 === 0) {
                return 'FizzBuzz';
            } elseif ($value % 5 === 0) {
                return 'Buzz';
            } elseif ($value % 3 === 0) {
                return 'Fizz';
            } else {
                return (string)$value;
            }
        }, range(1, $n));
    }
}
