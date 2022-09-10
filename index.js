
// let ans = findDuplicate([1, 2, 2, 3]);
// console.log(ans);
var findErrorNums = function (nums) {
    let n = nums.length;
    let duplicate;

    let sum = 0;
    let s = new Set();
    for (let index = 0; index < n; index++) {
        if (s.has(nums[index])) {
            duplicate = nums[index];
            continue;
        }
        s.add(nums[index]);
    }
    let myiterator = s.values();
    for (const iterator of myiterator) {
        sum += iterator;
    }
    let cal = parseInt((n * (n + 1) / 2));
    return [duplicate,cal-sum];
    

};
// let ans = findErrorNums([23, 21, 24, 27, 22, 27, 26, 25]);
let ans = findErrorNums([1, 2, 3, 4, 4, 5]);
// let ans = findErrorNums([1, 2,2,4]);
console.log(window);

