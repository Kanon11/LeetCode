/**
 * @param {number} num
 * @param {number} k
 * @return {number}
 */
var divisorSubstrings = function (num, k) {
    let count = 0;
    let s = String(num);
    for (let i = 0; i < s.length; i++) {
        let n = "";
        if (i + k <= s.length) {
            n = Number( s.slice(i, i + k));
            count = num % n == 0 ? count += 1 : count;
        }

        
    }
    return count;
};
console.log(divisorSubstrings(240, 2));