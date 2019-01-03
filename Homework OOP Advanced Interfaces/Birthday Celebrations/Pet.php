<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 25.10.2018 г.
 * Time: 10:13
 */

class Pet implements searchYear
{
    /**
     * @var string
     */
    private $date;

    /**
     * @var string
     */
    private $year;

    /**
     * Pet constructor.
     * @param string $date
     * @param string $year
     */
    public function __construct(string $date, string $year)
    {
        $this->setDate($date);
        $this->setYear($year);
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
    public function getYear(): string
    {
        return $this->year;
    }

    /**
     * @param string $year
     */
    private function setYear(string $year): void
    {
        $this->year = $year;
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