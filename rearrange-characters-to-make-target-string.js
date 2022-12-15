var rearrangeCharacters = function (s, target) {
    // if (target.length > s.length) {
    //     return 0;
    // }
    let a_target = target.split("");
    let ans = {};
    for (let i = 0; i < s.length; i++) {
        if (a_target.includes(s[i])) {
            if (ans[s[i]]==undefined) {
                ans[s[i]] = 1;
            } else {
                ans[s[i]] += 1;
            }
           
        }
        
    }
    let target_ans = {};
    for (let i = 0; i < target.length; i++) {
        if (target_ans[target[i]] == undefined) {
            target_ans[target[i]] = 1;
            } else {
            target_ans[target[i]] += 1;
            }


    }
    let min_ans = s.length;
    for (let i = 0; i < a_target.length; i++) {
        console.log("ans",a_target[i],ans[a_target[i]]);
        console.log("t-ans", a_target[i],target_ans[a_target[i]]);
        let temp = parseInt(ans[a_target[i]] / target_ans[a_target[i]]) ? parseInt(ans[a_target[i]] / target_ans[a_target[i]]) : 0;
        console.log(temp);
        if (temp<min_ans) {
            min_ans = temp;
        }
    }
    return min_ans;
};

console.log(rearrangeCharacters("hshac","h"))