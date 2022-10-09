

var twoSum = function (numbers, target) {
    let start = 0;
    let end = numbers.length - 1;
    while (start < end) {
        let a = numbers[start];
        let b = numbers[end];
        let c = a + b;
        if (c===target) {
            return [start+1, end+1];
        }
        else if (c > target) {
            end--;
        }
        else {
            start++;
        }

    }
};
var numbers = [2, 3,4];
var target = 7;
console.log(twoSum(numbers, target));
