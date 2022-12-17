var kWeakestRows = function (mat, k) {
    let map = {};
    for (let i = 0; i < mat.length; i++) {
        let count = 0;
        for (let j = 0; j < mat[i].length; j++) {
            if (mat[i][j] == 1) {
                count++;
           }
        }
        map[i] = count;
        
    }
   let keysSorted = Object.keys(map).sort(function (a, b) { return map[a] - map[b] })
    return keysSorted.slice(0, k);

};
let mat =
    [[1, 0, 0, 0],
    [1, 1, 1, 1],
    [1, 0, 0, 0],
    [1, 0, 0, 0]];
let k = 2;

console.log(kWeakestRows(mat, k));