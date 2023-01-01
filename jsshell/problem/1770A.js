var t = readline();
t = parseInt(t);
while (t--) {
    var input = readline().split(" ").map(function (x) { return parseInt(x) });
    var n = input[0];
    var m = input[1];
    var a = readline().split(" ").map(function (x) { return parseInt(x) });
    var b = readline().split(" ").map(function (x) { return parseInt(x) });
    var sum = b[b.length - 1];
    b.pop()
    var c = a.concat(b);
    c = c.sort(function (x, y) { return y - x });
    for (let i = 0; i < n-1; i++) {
        sum += c[i];
        
    }
    print(sum);
}