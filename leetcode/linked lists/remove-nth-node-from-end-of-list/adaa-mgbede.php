<?php

/**
 * Class ListNode
 * Definition for a singly-linked list.
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
    public $head;

    public function __construct(){
        $this->head = null;
    }

    public function countList($head) {
        $i = 0;
        $this->head = $head;

        if($this->head) {
            $temp = $this->head;
            while($temp != null) {
                $i++;
                $temp = $temp->next;
            }
        }
        return $i;
    }

    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {
        if(!$head) {
            return $head;
        }

        $count = $this->countList($head);
        $pos = $count - $n;

        if($count == 1) {
            return new ListNode(null);
        }
        if ($count == $n) {
            $head = $head->next;
            return $head;
        } else {
            $current = $head;
            for($i = 0; $i < $pos - 1; $i++) {
                if($current != null) {
                    $current = $current->next;
                }
            }
            $nodeToDelete = $current->next;
            $current->next = $current->next->next;
            $nodeToDelete = null;

            return $head;
        }
    }
}