var isAnagram = function (s, t) {
    if (s.length < t.length) {
        return false;
    }

    let s_map = new Map();
    let t_map = new Map();

    for (let i = 0; i < s.length; i++) {
        if (s_map.has(s[i])) {
            s_map.set(s[i], s_map.get(s[i]) + 1);
        }
        else {
            s_map.set(s[i], 1)
        }

    }
    for (let j = 0; j < t.length; j++) {
        if (t_map.has(t[j])) {
            t_map.set(t[j], t_map.get(t[j]) + 1);
        }
        else {
            t_map.set(t[j], 1);
        }
    }
    for (let x of s_map.keys()) {
        if (t_map.has(x)) {
            if (s_map.get(x) === t_map.get(x)) {
                continue;
            }
            else {
                return false;
            }
        }
        else {
            return false;
        }
    }

    return true;
};

var groupAnagrams = function (strs) {

    let g_anagram = new Map();
    for (let index = 0; index < strs.length; index++) {
        const element = strs[index];
        if (index === 0) {
            g_anagram[0][0] = element;
        }
        else {
            for (let i = 0; i < g_anagram.length; i++) {
                const g = g_anagram[i][0];
                if (isAnagram(element,g)) {
                    g_anagram[i].push(g);
                }      
            }
            g_anagram[g_anagram.length].push(element);
        }

        
    }
    return g_anagram;
};
strs = ["eat", "tea", "tan", "ate", "nat", "bat"];
// strs = [""];
let res = groupAnagrams(strs);
console.log(res);
