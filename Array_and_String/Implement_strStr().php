<?php

class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        if ($haystack === '') return 0;

        $haystack_ary = str_split($haystack);
        $needle_ary = str_split($needle);

        $search_count = count($haystack_ary);
        for ($i = 0; $i < $search_count; $i++) {

            $target_next = 0;
            $result = [];
            foreach ($needle_ary as $needle_val) {
                for ($j = $target_next; $j < count($haystack_ary); $j++) {
                    if ($needle_val === $haystack_ary[$i+$j]) {
                        $target_next = $j+1;
                        $result[] = $i+$j;
                        break;
                    } else {
                        if (count($result) > 0) {
                            $result = [];
                            break;
                        }
                    }
                }
            }
            if (count($result) === count($needle_ary)) break;
        }

        if (count($needle_ary) === count($result)) return $result[0];
        return -1;
    }
}

//$sol = new Solution();
//var_dump($sol->strStr('mississippi', 'issip'));// expected: 4