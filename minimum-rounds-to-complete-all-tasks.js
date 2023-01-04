
var minimumRounds = function (tasks) {
    let obj = {};
    for (let i = 0; i < tasks.length; i++) {
        if (obj[tasks[i]]==undefined) {
            obj[tasks[i]] = 1;
        } else {
            obj[tasks[i]]++;
        }
        
    }
    let count = 0;
    for (key in obj) {
        if (obj[key]<2) {
            return -1;
        }
        else {
            count += Math.ceil(obj[key] / 3);
        }

    }
    return count;

};

console.log(minimumRounds([2, 3,3]))