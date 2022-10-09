
var threeSum = function (nums) {

    nums = nums.sort();
    let l = nums.length;
    let ans = [];
    for (let i = 0; i < l; i++) {
        if (i > 0 && nums[i]== nums[i - 1]) {
            continue;
        }
        let start = i+1;
        let end = l - 1;
        while (start < end) {
            if (nums[i] + nums[start] + nums[end] > 0) {
                end--;
            }
            else if (nums[i] + nums[start] + nums[end] < 0) {
                start++;
            }
            else {
                ans.push([nums[i], nums[start], nums[end]]);
                start = start + 1;
                while (start<end && nums[start]==nums[start-1]) {
                    start = start + 1;
                }
            }
        }
    }
    return ans;
    
};

var nums = [-1, 0, 1, 0];
console.log(threeSum(nums));