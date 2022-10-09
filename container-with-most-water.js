var maxArea = function (height) {
    var l = 0;
    var r = height.length-1;
    var area = 0;
    while (l < r) {
        var temp = (r - l) *((height[r]< height[l])?height[r]:height[l]);
        area = area>temp?area:temp;
        if (height[l] <= height[r]) {
            l++;
        }
        else {
            r--;
        }
        
    }
    return area;
};
var height = [1, 8, 6, 2, 5, 4, 8, 3, 7];
// var height = [2, 3, 4, 5, 18, 17, 6];
console.log(maxArea(height));