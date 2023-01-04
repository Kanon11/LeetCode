var detectCapitalUse = function (word) {
    var all_capital = 1;
    var all_small = 1;
    var first_capital = 1;
    for (let i = 0; i < word.length; i++) {
        const element = word.charCodeAt(i);
        if (element<65||element>90) {
            all_capital = 0;
            break;
        } 
    }
    if (all_capital==1) {
        return true;
    }
    for (let i = 0; i < word.length; i++) {
        const element = word.charCodeAt(i);
        if (element < 97 || element > 122) {
            all_small = 0;
            break;
        }
    }
    if (all_small == 1) {
        return true;
    }
    for (let i = 0; i < word.length; i++) {
        const element = word.charCodeAt(i);
        if (i>0&& (element >= 65 && element <= 90)) {
            first_capital = 0;
            break;
        }
    }
    if (first_capital==1) {
        return true;
    }
    return false;
};


var ans = detectCapitalUse("FlaG");
console.log(ans)