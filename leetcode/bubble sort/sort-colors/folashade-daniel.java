class Solution {

    // bubble sort algorithm
    public void sortColors(int[] nums) {

        for (int i = 0; i < nums.length-1; i++) {

            boolean swapped = false;
            for (int j = 0; j < nums.length-1; j++) {
                if (nums[j] > nums[j+1]) {
                    int temp = nums[j];
                    nums[j] = nums[j+1];
                    nums[j+1] = temp;
                    swapped = true;
                }
            }

            if (!swapped) {
                break;
            }
        }
    }

    public void sortColors(int[] nums) {
        int count0 = 0;
        int count1 = 0;
        int count2 = 0;

        for (int i = 0; i < nums.length; i++) {
            if (nums[i] == 0) {
                count0++;
            } else if (nums[i] == 1) {
                count1++;
            } else {
                count2++;
            }
        }

        for (int j = 0; j < nums.length; j++) {
            if (j < count0) {
                nums[j] = 0;
            } else if (j < count1 + count0) {
                nums[j] = 1;
            } else {
                nums[j] = 2;
            }
        }
    }
}