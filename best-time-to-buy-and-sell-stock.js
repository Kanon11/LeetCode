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
console.log(maxProfit(prices));