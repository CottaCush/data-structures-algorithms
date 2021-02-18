def maxHeap(arr, n, i):
    j = i
    left = (2*i) + 1
    right = (2*i) + 2
    
    if left < n and arr[left] > arr[j]:
        j = left
    
    if right < n and arr[right] > arr[j]:
        j = right
    
    if j != i:
        valueJ = arr[j]
        arr[j] = arr[i]
        arr[i] = valueJ
        maxHeap(arr, n, j)

class Solution:
    def sortArray(self, nums: List[int]) -> List[int]:
        length = len(nums)
        heapSize = int(length/2) - 1
        for i in range(heapSize, -1, -1):
            maxHeap(nums, length, i)
        
        for i in range(length, 1, -1):
            k = i - 1
            valueK = nums[k]
            nums[k] = nums[0]
            nums[0] = valueK
            maxHeap(nums, k, 0)
            
        return nums
        