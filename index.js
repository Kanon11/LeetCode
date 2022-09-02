var majorityElement = function (nums) {
    var n = nums.length;
    var m = parseInt(n / 2);
    var c = 0;
    let item = null;
    for (let index = 0; index < n; index++) {
        c = 0;
        item = nums[index];
        for (let j = 0; j < n; j++){
            if (item == nums[j]) {
                c++;
                if (c > m) {
                    return item;
                }
            }
        }
        
    }

};

var nums = [2, 2, 1, 1, 1, 2, 2];
console.log(majorityElement(nums));