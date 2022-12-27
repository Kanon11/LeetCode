var input = readline();
n = parseInt(input);
var a = readline().split(" ").map(x => parseInt(x));
var sereja = 0;
var dima = 0;
var l = 0;
var h = n - 1;
var sf = 1;
var df = 0;
while (l<=h) {
    if (sf==1) {
        if (a[l]>a[h]) {
            sereja += a[l];
            l++;
        } else {
            sereja += a[h];
            h--;
        }
        sf = 0;
        df = 1;
    } else {
        if (a[l] > a[h]) {
            dima += a[l];
            l++;
        } else {
            dima += a[h];
            h--;
        }
        sf = 1;
        df = 0;
    }
}
print(sereja, dima);