var maxProfit = function (prices) {
    let max_tk = 0;
    let l = 0;
    let r = 1;
    while (r<prices.length) {
        if (prices[r] - prices[l] < 0) {

            l = r;
        }
        else {
            max_tk = Math.max(prices[r] - prices[l], max_tk);
        }
        r++;
    }
    return max_tk;
};

let prices = [2, 1, 2, 1, 0, 1, 2];
console.log(maxProfit(prices));