

var getDistances = function (arr) {
    let map = {};
    for (let i = 0; i < arr.length; i++) {
        if (map.hasOwnProperty(arr[i])) {
            map[arr[i]].push(i);
        }
        else {
            map[arr[i]] = [i];
        }
    }
    let ans = [];
    for (let i = 0; i < arr.length; i++) {
        let sum = 0;
        for (let j = 0; j < map[arr[i]].length; j++){
            sum += Math.abs(map[arr[i]][j] - i);
        }
        ans.push(sum);

    }
    return ans;
};

console.log(getDistances([10,5,10,10]));