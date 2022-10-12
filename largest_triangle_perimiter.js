var largestPerimeter = function (nums) {

    nums = nums.sort(function (a, b) { return a - b; });

    for (let i = nums.length - 1; i >= 2; i--) {
        if ((nums[i - 1] + nums[i - 2]) > nums[i]) {
            return (nums[i - 1] + nums[i - 2] + nums[i]);
        }
    }

    return 0;

};
let nums = [1, 1, 2];
console.log(largestPerimeter(nums));