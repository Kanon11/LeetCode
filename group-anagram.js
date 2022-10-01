function getKeyByValue(object, value) {
    return Object.keys(object).find(key => object[key] === value);
}
var topKFrequent = function (nums, k) {

    let map = new Map;
    for (let i = 0; i < nums.length; i++) {
        const element = nums[i];
        if (map[element] != null) {
            map[element] = (map[element] + 1);
        }
        else {
            map[element] = 1;
        }

    }
    console.log(map);
    let ans = new Map();
    for (let j = 1; j <= nums.length; j++) {
        let x = getKeyByValue(map, j);
        console.log('x', x);

    };
    console.log(ans);

};
var nums = [1, 1, 1, 2, 2,2, 3, 3];
var k = 2;
let ff = topKFrequent(nums, k);
// console.log(ff);