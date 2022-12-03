var intersection = function (nums) {
    if (nums.length===1) {
        return nums[0].sort((a, b) =>  a - b );
    }
    let initSet = new Set(nums[0]);
    for (let i = 0; i < nums.length; i++) {
        initSet = new Set([...nums[i]].filter(x => initSet.has(x)));
        
    }
    return Array.from(initSet).sort((a, b) => a - b);
};

let nums = [[3, 1, 2, 4, 5], [1, 2, 3, 4], [3, 4, 5, 6]];
console.log(intersection(nums));