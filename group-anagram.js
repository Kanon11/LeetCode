function getKeyByValue(object, value) {
    return Object.keys(object).find(key => object[key] === value);
}
function getkeys(map,value) {
    map.forEach(element => {
        console.log(element);
    });
}
var topKFrequent = function (nums, k) {

    let map = new Map;
    for (let i = 0; i < nums.length; i++) {
        const element =  nums[i];
        if (map[ element] != null) {
            map[element] = (map[element] + 1);
        }
        else {
            map[element] = 1;
        }

    }
    console.log(map);
    for (let [currentNumber, frequency] of map) { 
        console.log([currentNumber, frequency]);
    }
    // for (let j = 0; j < nums.length; j++) {
    //     console.log(map[1]);
    // };

};
var nums = [1, 1, 1, 2, 2,2, 3, 3];
var k = 2;
let ff = topKFrequent(nums, k);
// console.log(ff);