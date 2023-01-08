var maxPoints = function (points) {
    if (points.length == 1) return 1;
    let obj = {};
    for (let i = 0; i < points.length; i++) {
        for (let j = i + 1; j < points.length; j++) {
            var slope = findline(points[i], points[j])
            if (obj[slope]) {
                obj[slope].add(i);
                obj[slope].add(j);
            }
            else {
                obj[slope] = new Set();
                obj[slope].add(i);
                obj[slope].add(j);
            }
        }
    }
    let maxvalue = 0;
    for (const key in obj) {
        if (obj[key].size > maxvalue) {
            maxvalue = obj[key].size;
        }
    }
    return maxvalue

};
var findline = (p1, p2) => {
    if (p2[1] == p1[1]) { //y same
        return [0, p1[1]];
    }
    else if (p2[0] == p1[0]) { // x same
        return [p2[0], null];
    }
    else {
        let slope = ((p2[1] - p1[1]) / (p2[0] - p1[0]))
        let c = p1[1] - (slope * p1[0]);
        return [slope, c];

    }
}