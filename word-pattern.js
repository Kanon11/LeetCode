var wordPattern = function (pattern, s) {
    let s_array = s.split(" ");
    if (pattern.length!=s_array.length) {
        return false
    }
    let obj = {};
    for (let i = 0,j=0; i < pattern.length; i++) {
        if (obj[pattern[i]] == undefined) {
            if (getKeyByValue(obj,s_array[j])==undefined) {
                obj[pattern[i]] = s_array[j];
                j++;
            } else {
                return false;
            }
            
        }
        else if (obj[pattern[i]] != s_array[j]) {
            return false;
        }
        else if (obj[pattern[i]] == s_array[j]) {
            j++;
        }
    }
    return true;

};

console.log(wordPattern("aaa", "dog dog dog dog dog"))

function getKeyByValue(object, value) {
    return Object.keys(object).find(key => object[key] === value);
}


// const map = { "first": "1", "second": "2" };
// console.log(getKeyByValue(map, "3"));