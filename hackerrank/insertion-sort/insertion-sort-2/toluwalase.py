def insertionSort2(n, arr):
    length_of_array = len(arr)
    if length_of_array == 1:
        return arr
    else:
        for i in range(1, length_of_array):
            sort_this = arr[i]

            while arr[i - 1] > sort_this and i > 0:
                arr[i], arr[i - 1] = arr[i - 1], arr[i]
                i = i - 1
            print(arr)

if __name__ == '__main__':
    n = int(input())

    arr = list(map(int, input().rstrip().split()))

    insertionSort2(n, arr)
# insertionSort2(7, [3, 4, 7, 5, 6, 2, 1])