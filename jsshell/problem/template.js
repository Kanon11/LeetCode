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
        var arrays = readline().split(" ").map(function (x) { return parseInt(x) });
        var ans = 1;
        for (let i = 0; i < arrays.length; i++) {
            ans *= arrays[i];

        }
        print((ans + (n - 1)) * 2022);

    }
}