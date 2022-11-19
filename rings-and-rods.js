var countPoints = function (rings) {
    let a = {};
    a["0"] = new Set();
    a["1"] = new Set();
    a["2"] = new Set();
    a["3"] = new Set();
    a["4"] = new Set();
    a["5"] = new Set();
    a["6"] = new Set();
    a["7"] = new Set();
    a["8"] = new Set();
    a["9"] = new Set();
    for (let i = 1; i < rings.length; i+=2){
        a[rings[i]].add(rings[i - 1]);
    }
    let count = 0;
    for (let i = 0; i < 10; i++){
        if (a[i].size == 3) {
            count++
        }
    }
    return count;
};

console.log(countPoints("B0B6G0R6R0R6G9"));