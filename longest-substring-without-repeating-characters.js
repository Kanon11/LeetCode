var lengthOfLongestSubstring = function(s) {
    let l = 0;
    let r = 0;
    let set = new Set();
    let max_size = 0;
    while (r < s.length) {
        while (set.has(s[r])) {
            set.delete(s[l]);
            l++
        }
        set.add(s[r]);
        max_size = Math.max(max_size, r - l + 1);
        r++;
        
    }
        return max_size;

};

// let s = "aab";
// let s = "abcabcbb";
// let s = "dddd";
let s = "dvdf";
console.log(lengthOfLongestSubstring(s));