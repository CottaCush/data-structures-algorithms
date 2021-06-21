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
    public ListNode insertionSortList(ListNode head) {

        if (head == null || head.next == null) {
            return head;
        }

        ListNode pointer = head;
        ListNode currentNode = head.next;

        while (currentNode != null) {
            while (currentNode != pointer) {
                if (currentNode.val < pointer.val) {
                    int temp = currentNode.val;
                    currentNode.val = pointer.val;
                    pointer.val = temp;
                } else {
                    pointer = pointer.next;
                }
            }
            currentNode = currentNode.next;
            pointer = head;
        }
        return head;
    }
}