
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
    let array = [];
    let count = 0;
    for (let i = 0; i < points.length - 1;) {
        if (points[i][1] < points[i + 1][0]) {
            array.push(points[i]);
            array.push(points[i + 1]);
            i++;
            count += 2;
            console.log('1')
        }
        else if (points[i][0] <= points[i + 1][0] && points[i][1] <= points[i + 1][1]) {
                array.push([points[i][0], points[i + 1][1]]);
                i++;
                count++;
                console.log('2')
        }
        else if (points[i][0] < points[i+1][0] && points[i][1] > points[i+1][1]) {
            array.push([points[i][0], points[i][1]]);
            i++
            count++;
            console.log('3')

        }
        else {
            console.log('else')
        }
        // else if(points[i][1]<=points[i+1][0])

    }
    console.log(array)
    return count?count:1;

};
// console.log(findMinArrowShots([[1, 2], [4, 5], [1, 5]]))
console.log(findMinArrowShots([[10, 16], [2, 8], [1, 6], [7, 12]]))
// console.log(findMinArrowShots([[1, 2], [3, 4], [5, 6], [7, 8]]))
// console.log(findMinArrowShots([[1, 2], [2, 3], [3, 4], [4, 5]]))