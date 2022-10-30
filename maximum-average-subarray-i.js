var findMaxAverage = function (nums, k) {
    let s = [];
    let l = r = 0;
    let sum = 0;
    let max_sum = 0;
    for (let i = 0; i < k; i++) {
        sum += nums[i];
    }
    max_sum = sum;
    for (i = k; i < nums.length; i++){
        sum = sum - nums[i - k] + nums[i];
        max_sum = Math.max(sum, max_sum);
    }
    return max_sum / k;

};
 let nums = [1, 12, -5, -6, 50, 3];
let k = 4;
console.log(findMaxAverage(nums, k));