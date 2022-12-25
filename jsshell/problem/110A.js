var input = readline();
input = input.split("").map(x => parseInt(x));
var count = 0;
for (let i = 0; i <input.length; i++) {
    const element = input[i];
    if (element == 4 || element == 7) {
        count++;
    }
    
}
if (count==4||count==7) {
    print("YES");
} else {
    print("NO");
}