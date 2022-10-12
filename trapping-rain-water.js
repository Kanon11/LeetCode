var trap = function (height) {
    let max_left = [];
    max_left[0] = 0;

    for (let i = 1; i < height.length; i++) {
        max_left[i] = max_left[i - 1] > height[i - 1] ? max_left[i - 1] : height[i-1];
        
    }
    let max_reight = [];
    max_reight[height.length - 1] = 0;
    for (let j = height.length-2; j >=0 ; j--) {
        max_reight[j] = max_reight[j + 1] > height[j + 1] ? max_reight[j + 1] : height[j + 1];
        
    }
    let ans = 0;
    for (let index = 0; index < height.length; index++) {
        let temp = Math.min(max_left[index], max_reight[index]) - height[index];
        ans += (temp >= 0) ? temp : 0;
        
    }
    return ans;
};
var height = [0, 1, 0, 2, 1, 0, 1, 3, 2, 1, 2, 1];
trap(height);
