<?php

class cons
{
    public $left, $right;
    public function __construct($left, $right)
    {
        $this->left = $left;
        $this->right = $right;
    }
}

function car($pair)
{
    return $pair->left;
}


function cdr($pair)
{
    return $pair->right;
}

$pair = new cons(1,4);

var_dump(car($pair));
var_dump(cdr($pair));