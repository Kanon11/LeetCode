var transpose = function (matrix) {
    let flag = [];
    for (let i = 0; i < matrix[0].length; i++) {
        let test = [];
        for (let j = 0; j < matrix.length; j++) {
                test.push(matrix[j][i]);


        }
        flag.push(test);
    }
    return flag;
};

console.log(transpose([[1, 2, 3], [4, 5, 6]]));