<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 18.10.2018 г.
 * Time: 10:55
 */

class Goldeditionbooks extends Book
{
    public function increasePrice(){
        return parent::getPrice()* 1.3;
    }
}