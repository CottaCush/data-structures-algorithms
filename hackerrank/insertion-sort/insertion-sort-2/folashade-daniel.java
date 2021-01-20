import java.util.*;

public class Solution {

    // Complete the insertionSort2 function below.
    static void insertionSort2(int n, int[] arr) {

        int count, temp;

        for (int i = 1; i < arr.length; i++) {
            count = i;
            while (count > 0 && arr[count] < arr[count -1]) {
                temp = arr[count];
                arr[count] = arr[count - 1];
                arr[count-1] = temp;
                count--;
            }
            printArray(arr);
            System.out.println();
        }
    }

    /* Helper method for printing array */
    private static void printArray(int[] arr) {
        for (int i = 0; i < arr.length; i++) {
            System.out.print(arr[i] + " ");
        }
    }
}
