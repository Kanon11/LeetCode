var findContentChildren = function (g, s) {
    g = g.sort(function (x, y) { return x - y });
    s = s.sort(function (x, y) { return x - y });
    var i = 0;
    var j = 0;
    var count = 0;
    while (i < g.length && j < s.length) {
        if (g[i]<=s[j]) {
            i++;
            j++;
            count++;
        }
        else {
            j++;
        }
    }
    return count;

};
console.log(findContentChildren([1,2],[1,1,1]))