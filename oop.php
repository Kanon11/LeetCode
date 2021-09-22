<?php
class employee
{
    public $salary = 40000;
}
class programmer extends employee
{
    public $bonous = 20000;
}

$obje = new programmer();
echo $obje->salary;
