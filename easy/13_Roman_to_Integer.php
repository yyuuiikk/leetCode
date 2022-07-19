<?php

class Solution {

    CONST ROMA_MAP = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];
    const ROMA_VX = [
        'V','X'
    ];
    const ROMA_LC = [
        'L','C'
    ];
    const ROMA_DM = [
        'D','M'
    ];
    
    
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $input_ary = str_split($s);
        $input_reversed = array_reverse($input_ary);
        $tmp = [];
        $result = 0;

        foreach ($input_reversed as $value) {
            if (count($tmp) === 0) {
                if ($value === 'I') {
                    $result += self::ROMA_MAP[$value];
                } else {
                    $tmp[] = $value;
                    $result += self::ROMA_MAP[$value];
                }
            } else {
                if (in_array($tmp[0], self::ROMA_VX, true)) {
                    if ($value === 'I') {
                        $tmp = [];
                        $result -= self::ROMA_MAP[$value];
                    } else {
                        $tmp[0] = $value;
                        $result += self::ROMA_MAP[$value];
                    }
                } elseif (in_array($tmp[0], self::ROMA_LC, true)) {
                    if ($value === 'X') {
                        $tmp = [];
                        $result -= self::ROMA_MAP[$value];
                    } else {
                        $tmp[0] = $value;
                        $result += self::ROMA_MAP[$value];
                    }
                } elseif (in_array($tmp[0], self::ROMA_DM, true)) {
                    if ($value === 'C') {
                        $tmp = [];
                        $result -= self::ROMA_MAP[$value];
                    } else {
                        $tmp[0] = $value;
                        $result += self::ROMA_MAP[$value];
                    }
                }
            }
        }

        return $result;
    }
}

