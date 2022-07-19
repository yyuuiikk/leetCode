<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}


class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function middleNode($head) {
        $count = 1;
        $data = $head;
        while (!is_null($data->next)) {
            $data = $data->next;
            $count++;
        }

        $loop = (int)floor($count/2);
        $data = $head;
        for ($i = 1; $i <= $loop; $i++) {
            $data = $data->next;
        }

        return $data;
    }
}

//$sol = new Solution();
//$head = new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5)))));
//var_dump($sol->middleNode($head));