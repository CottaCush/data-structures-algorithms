# This solution actually timed out on leetcode.
# The sorting algorithm used here is bubble sort
# The complexity is O(n^2)
# The solution required on leetcode is O(n log n)
# Therefore this solution will timeout for larger inputs

class Solution:
    def sortList(self, head: ListNode) -> ListNode:
        if head is None:
            return head
        while True:
            current = head
            swap = 0
            while current.next is not None:
                if current.val > current.next.val:
                    temp = current.val
                    current.val = current.next.val
                    current.next.val = temp
                    swap = 1
                current = current.next
            if swap == 0:
                break
        return head