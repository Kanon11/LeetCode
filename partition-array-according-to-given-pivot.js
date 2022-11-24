var pivotArray = function (nums, pivot) {
    let less = [];
    let equal = [];
    let greater = [];
    for (let i = 0; i < nums.length; i++) {
        const element = nums[i];
        if (element < pivot) {
            less.push(element);
        }
        else if (element == pivot) {
            equal.push(element);
        }
        else {
            greater.push(element);
        }
        
    }
    return less.concat(equal, greater);
};

let nums = [9, 12, 5, 10, 14, 3, 10];
let pivot = 10;

console.log(pivotArray(nums, pivot));