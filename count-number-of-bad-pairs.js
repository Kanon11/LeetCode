
var countBadPairs = function (nums) {
    let count = 0;
    for (let i = 0; i < nums.length; i++) {
        for (let j = nums.length - 1; j > i; j--) {
           if ((j-i)!=(nums[j]-nums[i])) {
               count++;
           }

       }
        
    }
    return count;
};
console.log(countBadPairs([1, 2, 3, 4, 5]))