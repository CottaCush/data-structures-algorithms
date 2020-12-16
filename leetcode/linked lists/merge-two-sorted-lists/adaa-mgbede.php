<?php

class SolutionMSL {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2) {

        $newNode = new ListNode();

        # Tail stores the last node
        $tail = $newNode;

        while (true) {

            // If any of the list gets completely empty
            // directly join all the elements of the other list
            if ($l1 == null) {
                $tail->next = $l2;
                break;
            }

            if ($l2 == null) {
                $tail->next = $l1;
                break;
            }


            // Compare the val of the lists and whichever is smaller is
            // appended to the last of the merged list and the head is changed
            if ($l1->val <= $l2->val) {
                $tail->next = $l1;
                $l1 = $l1->next;
            } else {
                $tail->next = $l2;
                $l2 = $l2->next;
            }

            // Advance the tail
            $tail = $tail->next;
        }

        // Returns the head of the merged list
        return $newNode->next;
    }
}