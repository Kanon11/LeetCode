
const N = 100

// No of rows and columns
var n, m;

// Declaring the matrix of maximum
// 100 rows and 100 columns
var a = new Array(N);
for(var i=0;i<N;i++){
	a[i] = new Array(N);
}

// For storing current sum
var current_sum = 0;

// For continuous update of
// maximum sum required
var total_sum = 0;

// Function to Input the matrix of size n*m
function inputMatrix()
{
	n = 3;
	m = 3;
	a[0][0] = 500;
	a[0][1] = 100;
	a[0][2] = 230;
	a[1][0] = 1000;
	a[1][1] = 300;
	a[1][2] = 100;
	a[2][0] = 200;
	a[2][1] = 1000;
	a[2][2] = 200;
}

// Function to calculate maximum sum of path
function maximum_sum_path(i, j)
{

	// Checking boundary condition
	if (i == n - 1 && j == m - 1)
		return a[i][j];


	if (i < n - 1 & j < m - 1) {
		var current_sum = Math.max(maximum_sum_path(i, j + 1),maximum_sum_path(i + 1, j));
		total_sum = a[i][j] + current_sum;
	}


	else if (i == n - 1)
		total_sum = a[i][j]+ maximum_sum_path(i, j + 1);


	else
		total_sum = a[i][j]+ maximum_sum_path(i + 1, j);

	return total_sum;
}


inputMatrix();


var maximum_sum = maximum_sum_path(0, 0);

console.log(maximum_sum);



