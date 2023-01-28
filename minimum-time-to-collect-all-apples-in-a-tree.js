
var minTime = function (n, edges, hasApple) {
    var array = new Array(n);
    for (let i = 0; i < n; i++) {
       array[i]=[]
        
    }
    for (let i = 0; i < edges.length; i++) {
        array[edges[i][0]].push(edges[i][1])
        array[edges[i][1]].push(edges[i][0])

    }
    console.log(array)
    return dfs(-1, 0, array, hasApple);
};

var dfs = function (previous, current, array, hasApple) {
    let ans = 0;
    for (var x of array[current]) {
        if (x !== previous) {
            let res = dfs(current, x, array, hasApple);
            if (res > 0 || hasApple[x]) {
                ans += (res+2);
            }
        }
    }
    return ans;
}

console.log(minTime(7, [[0, 1], [0, 2], [1, 4], [1, 5], [2, 3], [2, 6]],
                        [false,  false,  true,   false,   true,  true, false]))