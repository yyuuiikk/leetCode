<?php

class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        return array_map(function ($value) {
            if ($value % 15 === 0) return 'FizzBuzz';
            if ($value % 5 === 0) return 'Buzz';
            if ($value % 3 === 0) return 'Fizz';
            return (string)$value;
        }, range(1, $n));
    }
}
