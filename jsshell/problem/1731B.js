var input = readline();
var t = parseInt(input);
while (t--) {
    input = readline();
    var n = parseInt(input);
    var sum = ((((n * (n + 1)) % 1000000007) * (4 * n - 1)) % 1000000007 * 337) % 1000000007;
    console.log(sum);

}
