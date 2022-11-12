var countEven = function (num) {
    let count = 0;
    for (let index = 1; index <= num; index++) {
        let sum = 0;
        let m = index;
        while (m > 0) {
            let temp = parseInt(m % 10);
            sum += temp;
            m = parseInt(m / 10);
        }
        if (parseInt(sum % 2) == 0) {
            count++
        }
    }
    return count;
};

console.log(countEven(4));