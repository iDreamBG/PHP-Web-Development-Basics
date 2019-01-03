<?php

class Num
{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function getRevNum()
    {
        return strrev($this->number);
    }
}

$num = readline();

$number = new  Num($num);
echo $number->getRevNum();