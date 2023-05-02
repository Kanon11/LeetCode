var searchMatrix = function (matrix, target) {
    for (let i = 0; i < matrix.length; i++) {
        let first_index = 0;
        let last_index = matrix[i].length - 1;
        console.log(matrix[i][first_index], matrix[i][last_index]);
        if (matrix[i][first_index]<=target&&target<=matrix[i][last_index]) {
            let ans = binarySearch(matrix[i], target);
            if (ans!=-1) {
                return true;
            }
            else {
                return false;
            }
        }
        
    }
    return false;
};

var binarySearch = (array,target) => {
    let l = 0;
    let h = array.length - 1;
    while (l <= h) {
     let   mid = Math.round((l + h) / 2)
        if (array[mid] ==target) {
            return mid;
        }
        else if (array[mid] > target) {
            h = mid - 1;
        }
        else {
            l = mid + 1;
        }
    }
    return -1;

}

console.log(searchMatrix([[1, 3, 5, 7], [10, 11, 16, 20], [23, 30, 34, 60]],3))