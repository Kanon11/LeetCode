/**
 * @param {string} s
 * @return {boolean}
 */
var isPalindrome = function(s) {
    let str = s.replace(/[^0-9a-z]/gi, '').toLowerCase();
    let start = 0;
    let end = str.length-1;
    while (start<=end) {
        if (str[start] !== str[end]) {
            return false;
        }
        start++;
        end--;   
    }
    return true;
};
s = " ";
console.log(isPalindrome(s));