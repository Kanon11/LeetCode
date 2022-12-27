var input = readline();
var t = parseInt(input);
while (t--) {
    input = readline();
    var n = parseInt(input);
    var arrays = readline().split(" ").map(function (x) { return parseInt(x) });
    var ans = 1;
    for (let i = 0; i < arrays.length; i++) {
        ans *= arrays[i];
        
    }
    print((ans+(n-1)) * 2022);
    
}