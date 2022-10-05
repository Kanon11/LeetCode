var productExceptSelf = function (nums) {
    let output = [];
    output[0] = 1;
    let prefix = 1;
    for (let i = 1; i < nums.length; i++) {
        output[i] = nums[i-1 ] * prefix;
        prefix = prefix * nums[i-1];
        
    }
    let postfix = 1;
    for (let i = nums.length - 1; i >= 0; i--) {
            output[i] = output[i] * postfix;
            postfix = postfix * nums[i];


        
    }
    return output;
};

let nums = [1,2,3,4];
productExceptSelf(nums);