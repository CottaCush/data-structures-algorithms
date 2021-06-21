class Solution {
    
    public int[] sortArray(int[] nums) {
        heapSort(nums, nums.length);
        return nums;
    }
    
    private void heapify(int[] arr, int heapSize, int rootIndex) {
        int largestNodeIndex = rootIndex;
        
        int leftIndex = 2 * rootIndex + 1;
        int rightIndex = 2 * rootIndex + 2;
        
        if (leftIndex < heapSize && arr[leftIndex] > arr[largestNodeIndex]) {
            largestNodeIndex = leftIndex;
        }
        
        if (rightIndex < heapSize && arr[rightIndex] > arr[largestNodeIndex]) {
            largestNodeIndex = rightIndex;
        }
        
        if (largestNodeIndex != rootIndex) {
            int temp = arr[rootIndex];
            arr[rootIndex] = arr[largestNodeIndex];
            arr[largestNodeIndex] = temp;
            
            heapify(arr, heapSize, largestNodeIndex);
        }
    }
    
    private void heapSort(int[] arr, int heapSize) {
        int secondToLastLevel = (heapSize / 2) - 1;  // first node in level before leaf nodes.
        
        // build the heap
        for (int i = secondToLastLevel; i>= 0; i--) {
            heapify(arr, heapSize, i);
        }
        
        // remove the top element from the heap
        for (int i = heapSize-1; i > 0; i--) {
            int temp = arr[0];
            arr[0] = arr[i];
            arr[i] = temp;
            
            heapify(arr, i, 0);
        }
    }
}
