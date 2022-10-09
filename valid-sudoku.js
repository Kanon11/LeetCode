// var isValidSudoku = function (board) {


//     for (let i = 0; i < 9; i++) {
//         let row_map = new Set();
//         let col_map = new Set();
//         let box_map = new Set();
//         for (let j = 0; j < 9; j++) {
//             let _row = board[i][j];
//             let _col = board[j][i];
//             let _box = board[3 * Math.floor(i / 3) + Math.floor(j / 3)][3 * i % 3 + j % 3];
//             if (_row != '.') {
//                 if (row_map.has(_row)) {
//                     return false;
//                 }

//                 row_map.add(_row);

//             }
//             if (_col != '.') {
//                 if (col_map.has(_col)) {
//                     return false;
//                 }

//                 col_map.add(_col);

//             }
//             if (_box != '.') {
//                 if (box_map.has(_box)) {
//                     return false;
//                 }

//                 box_map.add(_box);

//             }
//         }
//     }


//     return true;

// };

var isValidSudoku = function (board) {
    for (let i = 0; i < 9; i++) {
        let row = new Set(),
            col = new Set(),
            box = new Set();

        for (let j = 0; j < 9; j++) {
            let _row = board[i][j];
            let _col = board[j][i];
            let _box = board[3 * Math.floor(i / 3) + Math.floor(j / 3)][3 * (i % 3) + (j % 3)]

            if (_row != '.') {
                if (row.has(_row)) return false;
                row.add(_row);
            }
            if (_col != '.') {
                if (col.has(_col)) return false;
                col.add(_col);
            }

            if (_box != '.') {
                if (box.has(_box)) return false;
                box.add(_box);
            }
        }
    }
    return true
};
let board =
    [[".", ".", ".", ".", "5", ".", ".", "1", "."],
    [".", "4", ".", "3", ".", ".", ".", ".", "."],
    [".", ".", ".", ".", ".", "3", ".", ".", "1"],
    ["8", ".", ".", ".", ".", ".", ".", "2", "."],
    [".", ".", "2", ".", "7", ".", ".", ".", "."],
    [".", "1", "5", ".", ".", ".", ".", ".", "."],
    [".", ".", ".", ".", ".", "2", ".", ".", "."],
    [".", "2", ".", "9", ".", ".", ".", ".", "."],
    [".", ".", "4", ".", ".", ".", ".", ".", "."]];
var ans = isValidSudoku(board);
console.log(ans);


