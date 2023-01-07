
var maxIceCream = function (costs, coins) {
    coins.sort(function (a, b) { return a - b });
    console.log("%c kanon",'color:orange')
    console.log([coins, coins]);
    
    let obj = {
        size: 20,
        weight: 80,
        height:50
    }
    let { ff} = obj;
    console.log(ff,weight)
};
let coins = [1, 3, 2, 4, 1];
let costs = 7;
console.log(maxIceCream(costs,coins))