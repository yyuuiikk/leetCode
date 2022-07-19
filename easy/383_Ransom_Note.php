<?php

class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        $notes = str_split($ransomNote);
        $mag = str_split($magazine);

        foreach ($notes as $note) {
            $search = array_search($note, $mag);
            if ($search === false) return false;
            array_splice($mag, $search, 1);
        }

        return true;
    }
}

$sol = new Solution();
var_dump($sol->canConstruct('aa', 'ab'));
