def maxHeap(list, n, i):
    j = i
    left = (i * 2) + 1
    right = (i * 2) + 2

    if left < n and list[left] > list[j]:
        j = left

    if right < n and list[right] > list[j]:
        j = right

    if j != i:
        list[i], list[j] = list[j], list[i]
        maxHeap(list, n, j)

def sortArray(nums):
    arrayLength = len(nums)
    heapSize = (arrayLength // 2) - 1

    for i in range(heapSize, -1, -1):
        maxHeap(nums, arrayLength, i)

    for i in range(arrayLength, 1, -1):
        k = i - 1
        nums[k], nums[0] = nums[0], nums[k]
        maxHeap(nums, k, 0)

    print(nums)

sortArray([9, 3, 3, 8, 9, 2, 9, 0, 8, 7, 2, 8, 19, 0, 1])
#i,j,k (position)
