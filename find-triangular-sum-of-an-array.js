var triangularSum = function (nums) {
    while (nums.length>1) {
        for (let i = 1; i <= nums.length-1; i++) {
            nums[i-1]=(parseInt((nums[i] + nums[i - 1]) % 10));

        }
        nums.pop();
    }
    return nums[0];

};
let nums = [1, 2, 3, 4, 5]

console.log(triangularSum(nums));