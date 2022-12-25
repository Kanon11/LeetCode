var t = readline();
t = parseInt(t);
while (t--) {
    var input = readline();
    var z = input.split(" ").map(x => parseInt(x));
    var n = z[0];
    var k = z[1];
    input = readline();
    var a = input.split(" ").map(x => parseInt(x));
    input = readline();
    var b = input.split(" ").map(x => parseInt(x));
    a = a.sort((a, b) => a - b);
    b = b.sort((a, b) => b - a);
    for (let i = 0; i < n; i++) {
        if (k>0) {
            if (a[i] < b[i]) {
                var c = a[i];
                a[i] = b[i];
                b[i] = c;
                k--;
            }
        }

    }
    var sum = 0;
    for (let i = 0; i < n; i++) {
        sum += a[i];
        
    }
    print(sum)


}