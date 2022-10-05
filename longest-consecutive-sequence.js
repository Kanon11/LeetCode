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
var longestConsecutive = function (nums) {
    var set = new Set(nums);
    let set_iterator = set.values();
    let ans_array = [];
    let max_temp_set_size = 0;
    for (const iterator of set_iterator) {
        let previous = iterator - 1;
        let next = iterator + 1;
        if (!set.has(previous)) {
            let temp_set = new Set();
            temp_set.add(iterator);
            while (set.has(next)) {
                temp_set.add(next);
                next++;
            }
           var temp_set_size = temp_set.size;
            if (temp_set_size>max_temp_set_size) {
                max_temp_set_size = temp_set_size;
            }
            ans_array.push(temp_set);
        }
    }
    return max_temp_set_size;
};
var nums = [0, 3, 7, 2, 5, 8, 4, 6, 0, 1];
let ans = longestConsecutive(nums);
console.log(ans);