// var isdistinct = function (s) {
//     if(s[])
// }
var countGoodSubstrings = function (s) {
    if (s.length < 3) {
        return 0;
    }
    let sum = "";
    for (let i = 0; i < 3; i++) {
         sum+= s[i];
        
    }

    let c = 0;
    if (sum[0] != sum[1] && sum[1] != sum[2] && sum[2] != sum[0]) {
        c++;
    }
    for (i = 3; i < s.length; i++){
        sum=sum.substring(1);
        sum = sum + s[i];
        if (sum[0] != sum[1] && sum[1] != sum[2] && sum[2] != sum[0]) {
            c++;
        }
    }
    return c;
};

let s = "x";
console.log(countGoodSubstrings(s));