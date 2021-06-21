# Complete the insertionSort2 function below.
def insertionSort2(n, arr):
    for x in range(1, n):
        unsorted = arr[x]
        sortedKey = x - 1
        
        while sortedKey >= 0 and unsorted < arr[sortedKey]:
            arr[sortedKey + 1] = arr[sortedKey]
            arr[sortedKey] = unsorted
            sortedKey -= 1
            
        arr[sortedKey + 1] = unsorted
        print(*arr)

if __name__ == '__main__':
    n = int(input())

    arr = list(map(int, input().rstrip().split()))

    insertionSort2(n, arr)
