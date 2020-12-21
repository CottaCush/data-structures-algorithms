<?php

class SolutionATN {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $newNode= new ListNode();
        $tail =$newNode;
        $total = 0;
        $carry = 0;
        $val = 0;

        while (true) {
            if($l1 !== null && $l2 !== null){
                $total = (int)($l1->val + $l2->val + $carry);
                $l1 = $l1->next;
                $l2 = $l2->next;
            } else if ($l1 !== null) {
                $total = (int)($carry + $l1->val);
                $l1 = $l1->next;
            } else if ($l2 !== null) {
                $total = (int)($carry + $l2->val);
                $l2 = $l2->next;
            } else {
                break;
            }

            $val = (int)($total % 10);
            $carry = (int)($total / 10);
            $tail->next= new ListNode($val);
            $tail = $tail->next;
        }

        if ($carry > 0) {
            $tail->next = new ListNode($carry);
            $tail = $tail->next;
        }

        return $newNode->next;
    }
}