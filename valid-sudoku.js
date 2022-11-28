var isValidSudoku = function (board) {
    for (let i = 0; i < board.length; i++) {
        let row_val = new Set();
        let col_val = new Set();
        let box_val = new Set();
        for (let j = 0; j < board[i].length; j++) {
         
            var _row = board[i][j];
            var _col = board[j][i];
            var _box = board[3 * Math.floor(i / 3) + Math.floor(j / 3)][3 * (i % 3) + (j % 3)];
            if (_row !== '.') {
                if (row_val.has(_row)) {
                    return false;
                }
                else {
                    row_val.add(_row);
                }
            }
            if (_col !== '.') {
                if (col_val.has(_col)) {
                    return false;
                }
                else {
                    col_val.add(_col);
                }
            }
            if (_box !== '.') {
                if (box_val.has(_box)) {
                    return false;
                }
                else {
                    box_val.add(_box);
                }
            }
        }
        
    }
    return true;


};

let board =
         [["5", "3", ".", ".", "7", ".", ".", ".", "."]
        , ["6", ".", ".", "1", "9", "5", ".", ".", "."]
        , [".", "9", "8", ".", ".", ".", ".", "6", "."]
        , ["8", ".", ".", ".", "6", ".", ".", ".", "3"]
        , ["4", ".", ".", "8", ".", "3", ".", ".", "1"]
        , ["7", ".", ".", ".", "2", ".", ".", ".", "6"]
        , [".", "6", ".", ".", ".", ".", "2", "8", "."]
        , [".", ".", ".", "4", "1", "9", ".", ".", "5"]
        , [".", ".", ".", ".", "8", ".", ".", "7", "9"]];

console.log(isValidSudoku(board));