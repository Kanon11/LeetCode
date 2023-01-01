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
    var input = readline();
    var t = parseInt(input);
    while (t--) {

        input = readline();
        var n = parseInt(input);
        var sum = ((((n * (n + 1)) % 1000000007) * (4 * n - 1)) % 1000000007 * 337) % 1000000007;
        print(sum);
    }
}