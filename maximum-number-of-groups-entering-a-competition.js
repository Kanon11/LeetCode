
var maximumGroups = function (grades) {
    if (grades.length==1) {
        return 1;
    }
    grades.sort((a, b) => (a-b));
    let groups = [];
    let j = 1;
    while (grades.length) {
        let temp_array = grades.slice(0, j);
        grades.splice(0, j);
        groups.push(temp_array);
        j++;
    }
    console.log(groups)
    if ((groups[groups.length - 1].length <= groups[groups.length - 2].length)) {
        groups[groups.length - 2] = groups[groups.length - 2].concat(groups[groups.length - 1]);
         groups.pop();
    } 

    return groups.length;



};
let grades = [8,8]
console.log(maximumGroups(grades))