var containsNearbyDuplicate = function (nums, k) {
    l = 0;
    r = l + k;
    if (r >= nums.length) {
        r = nums.length - 1;
    }

    while (r < nums.length) {
        let m = new Map();
        for (let i = l; i <= r; i++){
            if (m.get(nums[i])>=1) {
                return true;
            }
            else {
                m.set(nums[i], 1);
            }
        }
        l = r ;
        r = (r + k);
    }
    return false;

};

let nums = [1,0,1,1];
let k = 0;

console.log(containsNearbyDuplicate(nums, k));