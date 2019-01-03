<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 24.10.2018 г.
 * Time: 9:36
 */

class Citizen implements searchYear
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $age;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $date;

    /**
     * @var string
     */
    private $yera;

    /**
     * Citizen constructor.
     * @param string $name
     * @param string $age
     * @param string $id
     * @param string $date
     * @param string $year
     */
    public function __construct(string $name, string $age, string $id, string $date, string $year)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
        $this->setDate($date);
        $this->setYera($year);
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
    private function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getAge(): string
    {
        return $this->age;
    }

    /**
     * @param string $age
     */
    private function setAge(string $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    private function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    private function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getYera(): string
    {
        return $this->yera;
    }

    /**
     * @param string $yera
     */
    private function setYera(string $yera): void
    {
        $this->yera = $yera;
    }


    public function search(string $year, string $date): string
    {
        $dateEx = explode('/', $date);
        if($year == $dateEx[2]){
            return $date;
        }
        else{
            return "";
        }
    }
}