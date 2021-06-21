/**
 * Definition for singly-linked list.
 * public class ListNode {
 *     int val;
 *     ListNode next;
 *     ListNode() {}
 *     ListNode(int val) { this.val = val; }
 *     ListNode(int val, ListNode next) { this.val = val; this.next = next; }
 * }
 */
class Solution {
    public ListNode mergeTwoLists(ListNode l1, ListNode l2) {
        ListNode result = new ListNode();
        ListNode temp = result;
        while(l1 != null && l2 != null) {
            int currentL1 = l1.val;
            int currentL2 = l2.val;

            if (currentL1 < currentL2) {
                temp.next = new ListNode(currentL1);
                temp = temp.next;
                l1 = l1.next;
            } else if (currentL1 == currentL2) {
                temp.next = new ListNode(currentL1);
                temp = temp.next;
                temp.next = new ListNode(currentL2);
                temp = temp.next;
                l1 = l1.next;
                l2 = l2.next;
            } else {
                temp.next = new ListNode(currentL2);
                temp = temp.next;
                l2 = l2.next;
            }
        }

        while(l1 != null) {
            temp.next = l1;
            l1 = l1.next;
            temp = temp.next;
        }

        while(l2 != null) {
            temp.next = l2;
            l2 = l2.next;
            temp = temp.next;
        }
        return result.next;
    }
}