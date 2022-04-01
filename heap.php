<?php



class Solutionff
{
    public $heap;
   public function __construct($H)
    {
        $this->heap = $H;
    }

    public function left($i)
    {
        return (int)($i * 2);
    }
    public function right($i)
    {
        return (int)($i * 2 + 1);
    }
    public function parent($i)
    {
        return (int)($i / 2);
    }
    function max_heapify($i, $heap_size)
    {
        $largest = $i;
        $l = $this->left($i);
        $r = $this->right($i);

        if ($l < $heap_size && $this->heap[$l] > $this->heap[$largest]) {
            $largest = $l;
        }
        if ($r < $heap_size && $this->heap[$r] > $this->heap[$largest]) {
            $largest = $r;
        }
        if ($i == $largest) {
            return;
        }
        $temp = $this->heap[$i];
        $this->heap[$i] = $this->heap[$largest];
        $this->heap[$largest] = $temp;
        $this->max_heapify($largest, $heap_size);
    }
    public function is_max_heap()
    {
        $len = count($this->heap);
        for ($i = $len - 1; $i >= 1; $i++) {
            $p = $this->parent($i);
            if ($this->heap[$i] > $this->heap[$p] && $p>=1) {
                return 'no';
            }
            return 'yes';
        }
    }
    public  function build_heap()
    {
        $len = count($this->heap);
        for ($i = $len - 1; $i >= 1; $i--) {
            $this->max_heapify($i, $len);
        }

    }
    public function heap_sort(){
        $len=count($this->heap);
        for ($i=$len-1; $i >=1 ; $i--) { 
            $max_i=$this->heap[1];
            $this->heap[1]=$this->heap[$i];
            $this->heap[$i]=$max_i;
            $len--;
            $this->max_heapify(1, $len);
        }
    }
    public function print_heap()
    {
        for ($i = 1; $i < count($this->heap); $i++) {
            echo $this->heap[$i] . " ";
        }
    }
    public function get_maximum(){
        return $this->heap[1];
    }
    public function extract_max(){
        $mx = $this->heap[1];
        $this->heap[1]=$this->heap[count($this->heap)-1];
        array_pop($this->heap);
        $this->max_heapify(1,count($this->heap)-1);
        return $mx;
    }
     public function insert_node($node)
    {
        $heap_size= count($this->heap) - 1;
        $heap_size+=1;
        $this->heap[$heap_size]=$node;
        $i=$heap_size;
        $p=$this->parent($i);
        while($i>1 && $this->heap[$i]>$this->heap[$p]){
            $p = $this->parent($i);
            $t=$this->heap[$i];
            $this->heap[$i]=$this->heap[$p];
            $this->heap[$p]=$t;
            $i=$p;
        }
    }
}
$x = [0,19,10,17,5,7,12,1,2,6];
$obj = new solutionff($x);
$obj->build_heap();
// $obj->heap_sort();
$obj->print_heap();
echo "<br>";
echo $obj->is_max_heap();
echo "<br>";
// echo $obj->extract_max(); echo "<br>";
// $obj->print_heap();
// echo "<br>";
// echo $obj->extract_max();
// echo $obj->extract_max() ;
// echo "<br>";
// $obj->print_heap();
// echo "<br>";
$obj->insert_node(20);
$obj->insert_node(21);
$obj->insert_node(26);
$obj->insert_node(6);
// $obj->heap_sort();
$obj->print_heap();
echo "<br>";
echo $obj->is_max_heap();
echo "<br>";
