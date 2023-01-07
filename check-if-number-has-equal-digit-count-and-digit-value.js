var categorizeBox = function (length, width, height, mass) {
    var bulky_flag = 0;
    var heavy_flag = 0;
    if (length>=10000||width>=10000||height>=10000) {
        bulky_flag = 1;
    }
    if ((length * width * height) >= 1000000000) {
        bulky_flag = 1;
    }
    if (mass>=100) {
        heavy_flag = 1;
    }
    if (heavy_flag == 1 && bulky_flag == 1) {
        return "Both"
    }
    else if (heavy_flag == 0 && bulky_flag == 0) {
        return "Neither"
    }
    else if (heavy_flag == 0 && bulky_flag == 1) {
        return "Bulky"
    }
    else if (heavy_flag == 1 && bulky_flag == 0) {
        return "Heavy"
    }
    
};

console.log(categorizeBox(1000,35,700,300))