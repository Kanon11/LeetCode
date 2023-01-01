while (1) {
    var input = readline();
    var n = parseInt(input);
    var sum = 0;
    var countplus = 0;
    var countminus = 0;
    while (n--) {
        var s = readline();
        for (var i = 0; i < s.length; i++) {
            const element = s[i];
            if (s[i]=='+') {
                countplus++;
            }
            else if (s[i] == '-') {
                countminus++;
            }
            sum += (countplus / 2);
            countplus = 0;
            sum -= (countminus / 2);
            countminus = 0;
        }
    }
    print(sum);
}

