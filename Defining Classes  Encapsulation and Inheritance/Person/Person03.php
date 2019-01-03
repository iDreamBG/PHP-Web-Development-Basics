<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 18.10.2018 г.
 * Time: 23:07
 */

class Person03
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var float
     */
    protected $age;

    /**
     * Person03 constructor.
     * @param string $name
     * @param float $age
     */
    public function __construct(string $name, float $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

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

    /**
     * @param float $age
     */
    public function setAge(float $age): void
    {
        if($age < 1){
            throw  new Exception('Age can not be negative!');
        }
        $this->age = $age;
    }


}