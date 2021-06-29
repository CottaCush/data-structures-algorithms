class Solution:
    def sumOfUnique(self, nums):
        store = {}
        add = 0
        for i in nums:
            if store.get(i):
                value = store[i]
                if value == 1:
                    add -= i
                store[i] += 1
            else:
                add += i
                store[i] = 1
        return add