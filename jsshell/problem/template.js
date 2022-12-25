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
    // your code goes here
    var input = readline();
    input = input.split("").map(x => parseInt(x));
    var count = 0;
    for (let i = 0; i < input.length; i++) {
        const element = input[i];
        if (element == 4 || element == 7) {
            count++;
        }

    }
    if (count == 4 || count == 7) {
        print("YES");
    } else {
        print("NO");
    }
}
