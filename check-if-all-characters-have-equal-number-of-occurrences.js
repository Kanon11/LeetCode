
var areOccurrencesEqual = function (s) {
    let a = {};
    for (let index = 0; index < s.length; index++) {
        if (a[s[index]] == undefined) {
            a[s[index]] = 1;
        }
        else {
            a[s[index]] = a[s[index]] + 1;
        }
        
    }
    var flag = true;
    var cont = a[s[0]];
    for (var item in a) {
        if (a[item] !== cont) {
            flag = false;
            break;
        }

    }
    return flag;
};

console.log(areOccurrencesEqual("aaabb"));