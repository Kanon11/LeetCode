var getRow = function(rowIndex) {
    var array=[1]
    rowIndex--
    for(var i=0;i<=rowIndex;i++){        
        array[i]=0;
    }
    console.log(array)
    for(var i=0;i<=rowIndex;i++){        
        for (var j = rowIndex - i; j <= rowIndex; j++){
            array[j] = array[j] + (array[j + 1]==undefined?1:array[j+1]);
        }
    }
 return array.concat(1);
};
console.log(getRow(6));