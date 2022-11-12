var isAlienSorted = function (words, order) {
    var x = words.length;
    for (let i = 1; i <x ; i++){
        if (compareword(words[i - 1], words[i],order)===false) {
            return false;
        }
    }
    return true;
};
var compareword = function (a, b,order) {
    let l_a = a.length;
    let l_b = b.length;
    let f_order = order;
    for (let i = 0, j = 0; i < l_a && j < l_b; i++, j++){
        if (a[i] !== b[i]) {
            let a_i = find_index(a[i], f_order);
            let b_j = find_index(b[j], f_order);
            if (a_i < b_j) {
                return true;
            }
            else {
                return false;
            }
        }
    }
    if (l_a > l_b) {
        return false;
    }
    return true;
}
var find_index = function (c, order) {
    var l = order.length;
    for (let i = 0; i < l; i++){
        if (c === order[i]) {
            return i;
        }
    }
    return -1;
}

let words = ["hello", "leetcode"];
let order = "hlabcdefgijkmnopqrstuvwxyz";
console.log(isAlienSorted(words, order));