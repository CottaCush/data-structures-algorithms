class Solution:
    def arrangeCoins(self, n: int) -> int:
        count = 0
        while count < n:
            count += 1
            n = n - count
        return count
        