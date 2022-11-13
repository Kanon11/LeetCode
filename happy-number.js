
var isHappy = function (n) {


    while (1) {
        let sum = 0;
        while (n>0) {
            let temp = parseInt(n % 10);
            sum += (Math.pow(temp, 2));
            n = parseInt(n / 10);
        }
      
        n = sum;
        if (n === 4) {
            return false;
        }
        if (n === 1) {
            return true;
        }
        console.log(n);
    }
};

console.log(isHappy(19));