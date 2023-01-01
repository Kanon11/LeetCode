var minStoneSum = function (piles, k) {
    piles = piles.sort((a, b) => b - a);
    var n = piles.length - 1;
    var j = 0;
    for (var i = 0; i < k; i++) {
        if (j >= n) {
            j = 0;
            piles = piles.sort((a, b) => b - a);
        }
        console.log(piles);
        if (piles[j] < piles[0]) {
            j = 0;
            piles = piles.sort((a, b) => b - a);
        }
        piles[j] = Math.round(piles[j] / 2);

        j++;
    }
    var sum = 0;
    for (var i = 0; i < piles.length; i++) {
        sum += piles[i];
    }
    return sum;

};

console.log(minStoneSum([2695, 9184, 2908, 3869, 3779, 391, 2896, 5328], 10));