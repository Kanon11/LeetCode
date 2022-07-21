<?php
class a
{
    protected $x;
    public $var;
    protected function v()
    {
        echo 'hi';
    }
}
class b extends a
{
    public function ff()
    {
        $this->v();
    }
}

$obj = new b();
$obj->ff();
