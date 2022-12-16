
var findWinners = function (matches) {
    let map = {};
    for (let i = 0; i < matches.length; i++) {
        if (map[matches[i][1]] == undefined) {
            map[matches[i][1]] = 1;
        }
        else {
            map[matches[i][1]] += 1;
        }
        
    }
    let no_lose = new Set();
    let one_lose = new Set();
    for (let i = 0; i < matches.length; i++) {
        if (map[matches[i][0]]==undefined) {
            no_lose.add(matches[i][0]);
        }
         if (map[matches[i][1]] == 1) {
            one_lose.add(matches[i][1]);
        }
    }
    no_lose = Array.from(no_lose);
    one_lose = Array.from(one_lose);
    no_lose = no_lose.sort(function (a, b) { return a - b });
    one_lose = one_lose.sort(function (a, b) { return a - b });
    return[no_lose, one_lose]
    
};
let matches = [[1, 3], [2, 3], [3, 6], [5, 6], [5, 7], [4, 5], [4, 8], [4, 9], [10, 4], [10, 9]];

console.log(findWinners(matches))