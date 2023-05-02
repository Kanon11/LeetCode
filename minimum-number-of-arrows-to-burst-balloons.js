
var findMinArrowShots = function (points) {
    points.sort(sortFunction);
    function sortFunction(a, b) {
        if (a[0] === b[0]) {
            return 0;
        }
        else {
            return (a[0] < b[0]) ? -1 : 1;
        }
    }
    console.log(points);

    let arrow_count = 1;
    let end_point = points[0][1];
    for (let i = 1; i < points.length;i++) {
        if (end_point>=points[i][0]) {
            end_point = Math.min(end_point, points[i][1]);
        } else {
            arrow_count++;
            end_point = points[i][1];
            
        }
    }
    return arrow_count;

};
console.log(findMinArrowShots([[1, 2], [4, 5], [1, 5]]))
// console.log(findMinArrowShots([[10, 16], [2, 8], [1, 6], [7, 12]]))
// console.log(findMinArrowShots([[1, 2], [3, 4], [5, 6], [7, 8]]))
// console.log(findMinArrowShots([[1, 2], [2, 3], [3, 4], [4, 5]]))