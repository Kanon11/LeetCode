var dict = {};

// Adding key-value -pairs
dict['key'] = 'value'; // Through indexer
dict.anotherKey = 'anotherValue'; // Through assignment

// Looping through
for (var item in dict) {
    console.log('key:' + item + ' value:' + dict[item]);
    // Output
    // key:key value:value
    // key:anotherKey value:anotherValue
}

// Non existent key
console.log(dict.notExist); // undefined

// Contains key?
if (dict.hasOwnProperty('key')) {
    // Remove item
    delete dict.key;
}

// Looping through
for (var item in dict) {
    console.log('key:' + item + ' value:' + dict[item]);
    // Output
    // key:anotherKey value:anotherValue
}