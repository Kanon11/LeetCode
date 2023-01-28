var maxSubarraySumCircular = function (nums) {
    let maxendnow = nums[0];
    let maxsofar = nums[0];
    let minendnow = nums[0];
    let minsofar = nums[0];
    let total = nums[0];
    for (let i = 1; i < nums.length; i++) {
        const element = nums[i];
        maxendnow = Math.max(element, maxendnow + element);
        maxsofar = Math.max(maxsofar, maxendnow);
        minendnow = Math.min(element, minendnow + element);
        minsofar=Math.min(minendnow,maxsofar)
        
    }
};