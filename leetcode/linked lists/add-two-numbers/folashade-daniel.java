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
    public ListNode addTwoNumbers(ListNode l1, ListNode l2) {
        ListNode output = new ListNode();
        ListNode temp = output;
        int val, total, carry = 0;

        while (l1 != null && l2 != null) {
            total = l1.val + l2.val + carry;
            val = total % 10;
            carry = total / 10;
            temp.next = new ListNode(val);
            temp = temp.next;
            l1 = l1.next;
            l2 = l2.next;
        }

        while (l1 != null) {
            total = carry + l1.val;
            val = total % 10;
            carry = total / 10;
            temp.next = new ListNode(val);
            temp = temp.next;
            l1 = l1.next;
        }

        while (l2 != null) {
            total = carry + l2.val;
            val = total % 10;
            carry = total / 10;
            temp.next = new ListNode(val);
            temp = temp.next;
            l2 = l2.next;
        }

        if (carry > 0) {
            temp.next = new ListNode(carry);
            temp = temp.next;
        }

        return output.next;
    }
}