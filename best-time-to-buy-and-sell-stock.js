<<<<<<< HEAD
/**
 * @param {number[]} prices
 * @return {number}
 */
var maxProfit = function (prices) {
    let profit = [];
    for (let i = 0; i < prices.length; i++) {
        for (let j = i; j < prices.length; j++) {
            if (profit[j] == undefined) {
                profit[j] = prices[j ] - prices[i];
            }
            else {
                profit[j] = Math.max(profit[j], prices[j] - prices[i]);
            }
            
        }
        
    }
    profit = profit.sort((a, b) => {return a - b });
    return (profit[profit.length-1]);
};

let prices = [7, 1, 5, 3, 6, 4];
=======
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
>>>>>>> 542da1b666cebc62f22830768315937aa113e83d
console.log(maxProfit(prices));