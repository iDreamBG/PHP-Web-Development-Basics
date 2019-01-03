<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 18.10.2018 г.
 * Time: 23:07
 */

class Child extends Person03
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getAge(): float
    {
        return $this->age;
    }


}