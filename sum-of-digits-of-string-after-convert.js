var getLucky = function (s, k) {
    let sum = "";
    for (let i = 0; i < s.length; i++) {
        sum += s[i].charCodeAt(0) - 96;
    }
    let t = 1;
    while (t <= k) {
        ans = 0;
        for (let j = 0; j < sum.length; j++) {
            ans += Number(sum[j]);
        }
        sum = String(ans);
        t++;
    }
    return sum;
};
console.log(getLucky("leetcode", 2));