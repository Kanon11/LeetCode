var MyHashMap = function() {
     this.map={};
};

MyHashMap.prototype.put = function(key, value) {
        this.map[key]=value;
};
MyHashMap.prototype.get = function(key) {
    if (this.map[key]==undefined) {
        return -1;
    } else {
        return this.map[key];
    }
    
};

MyHashMap.prototype.remove = function(key) {
    if (this.map[key] != undefined) {
        delete this.map[key];
    }
};



 var obj =new MyHashMap();
 obj.put('a',1);
 var param_2=obj.get('a');
 console.log(param_2);