"use strict";
process.stdin.resume();
process.stdin.setEncoding("utf-8");

function print(x) {
    console.log(x);
}
let inputString = "";
let currentLine = 0;

process.stdin.on("data", (inputStdin) => {
    inputString += inputStdin;
});
process.stdin.on("end", () => {
    inputString = inputString.split("\n");
    main();
});
function readline() {
    return inputString[currentLine++];
}

// ********** Code Start **********

function main() {
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
        for (var i = 0; i < n - 1; i++) {
            sum += c[i];

        }
        print(sum);
    }

}