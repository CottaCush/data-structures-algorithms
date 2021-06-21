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
    // Using pointers
    public ListNode removeNthFromEnd(ListNode head, int n) {
        ListNode node1 = head;
        ListNode node2 = head;

        // move node2 n elements into the linkedlist
        for (int i = 0; i < n; i++) {
            if (node2 == null) {
                return null;
            }
            node2 = node2.next;
        }

        while (node2 != null && node2.next != null) {
            node1 = node1.next;
            node2 = node2.next;
        }
        if (node2 == null) {
            head = node1.next;
        } else {
            node2 = node1.next; // using node2 instead of creating a new ListNode
            node1.next = node2.next;
        }
        return head;
    }
}