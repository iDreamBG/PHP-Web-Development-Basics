<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 22.10.2018 г.
 * Time: 10:21
 */

class WorkPerson extends Human
{
    /**
     * @var float
     */
    private $weeklySalary;

    /**
     * @var float
     */
    private $hoursPerDay;

    public function __construct(string $firstName, string $lastName, float $weeklySalary, float $hoursPerDay)
    {
        parent::__construct($firstName, $lastName);
        $this->setLastName($lastName);
        $this->setWeeklySalary($weeklySalary);
        $this->setHoursPerDay($hoursPerDay);
    }

    public function setLastName(string $lastName): void
    {
        if (ctype_lower($lastName[0]) || is_numeric($lastName[0])) {
            throw new Exception("Expected upper case letter!Argument: lastName");
        }
        if (strlen($lastName) <= 3) {
            throw new Exception("Expected length more than 3 symbols!Argument: lastName");
        }
        $this->lastName = $lastName;
    }

    /**
     * @return float
     */
    private function hourlySalary() : float
    {
        return $this->getWeeklySalary() / ($this->getHoursPerDay() * 7);
    }

    /**
     * @return float
     */
    public function getWeeklySalary(): float
    {
        return $this->weeklySalary;
    }


    /**
     * @param float $weeklySalary
     * @throws Exception
     */
    public function setWeeklySalary(float $weeklySalary): void
    {
        if ($weeklySalary <= 10) {
            throw new Exception("Expected value mismatch!Argument: weekSalary");
        }
        $this->weeklySalary = $weeklySalary;
    }

    /**
     * @return float
     */
    public function getHoursPerDay(): float
    {
        return $this->hoursPerDay;
    }

    /**
     * @param float $hoursPerDay
     * @throws Exception
     */
    public function setHoursPerDay(float $hoursPerDay): void
    {
        if ($hoursPerDay < 1 || $hoursPerDay > 12) {
            throw new Exception("Expected value mismatch!Argument: workHoursPerDay");
        }
        $this->hoursPerDay = $hoursPerDay;
    }


    public function __toString()
    {
        $salaryPerHour = number_format($this->hourlySalary(), 2, '.', '');
        $weekly = number_format($this->weeklySalary, 2, '.', '');
        $hours = number_format($this->hoursPerDay, 2, '.', '');
        return "First Name: $this->firstName\nLast Name: $this->lastName\nWeek Salary: $weekly\nHours per day: $hours\nSalary per hour: $salaryPerHour\n";
    }
}