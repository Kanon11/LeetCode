while (1) {
    var matrix = [];
    for (var i = 0; i < 5; i++) {
        var input = readline().split(" ").map(function (x) { return parseInt(x) });
        matrix.push(input);
    }
    print(matrix);
    var stop = false;
    for (var i = 0; i < matrix.length; i++) {
        for (var j = 0; j < matrix[i].length; j++) {
            if (matrix[i][j]==1) {
                stop = true;
                break;
            }
        }
        if (stop) {
            break;
        }
    }
    // print(i, j);
    print(Math.abs((i+1)-3)+Math.abs((j+1)-3))
}

