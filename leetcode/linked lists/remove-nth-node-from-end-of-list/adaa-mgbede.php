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
        $this->head = $head;
        if(!$this->head) {
            return $head;
        }

        $newNode = new ListNode();
        $count = $this->countList($head);
        $position = $count - $n;

        if($count == 1) {
            return $newNode->next;
        }
        if ($count == $n) {
            $head = $this->head->next;
            $this->head = null;
            return $head;
        } else {
            $newNode = $this->head;
            for($i = 1; $i < $position; $i++) {
                if($newNode != null) {
                    $newNode = $newNode->next;
                }
            }
            if($newNode != null && $newNode->next != null) {
                $nodeToDelete = $newNode->next;
                $newNode->next = $newNode->next->next;
                $nodeToDelete = null;
            }

            return $head;
        }
    }
}