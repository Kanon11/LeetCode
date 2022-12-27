var input = readline();
var t = parseInt(input);
while (t--) {
    input = readline();
    var N = parseInt(input);
    var dp = new Array(N);
    var visited = new Array(N);
    for (var i = 0; i < N; i++) {
        a[i] = new Array(N);
        dp[i] = new Array(N);
        visited[i] = new Array(N);
        for (var j = 0; j < N; j++) {
            a[i][j] = 0;
            dp[i][j] = 0;
            visited[i][j] = 0;
        }
    }
    var current_sum = 0;
    var total_sum = 0;
    inputMatrix(N);

    var maximum_sum = maximum_sum_path(0, 0);
    print(maximum_sum);

}
function inputMatrix(n) {
for (var i = 0; i <n; i++) {
    for (var j = 0; j < n; j++) {
        a[i][j] = (i + 1) * (j + 1);
    }
    
}
}
function maximum_sum_path(i, j) {


    if (i == n - 1 && j == m - 1)
        return a[i][j];

    if (visited[i][j] != 0)
        return dp[i][j];


    visited[i][j] = 1;

    var total_sum = 0;


    if (i < n - 1 & j < m - 1) {
        var current_sum = Math.max(maximum_sum_path(i, j + 1),maximum_sum_path(i + 1, j));
        total_sum = a[i][j] + current_sum;
    }


    else if (i == n - 1)
        total_sum = a[i][j] + maximum_sum_path(i, j + 1);


    else
        total_sum = a[i][j] + maximum_sum_path(i + 1, j);


    dp[i][j] = total_sum;


    return total_sum;
}