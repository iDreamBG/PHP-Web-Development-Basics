<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 22.10.2018 г.
 * Time: 10:21
 */
class Student extends Human
{
    /**
     * @var string
     */
    private $facultyNumber;

    public function __construct(string $firstName, string $lastName, string $facultyNumber)
    {
        parent::__construct($firstName, $lastName);
        $this->setFacultyNumber($facultyNumber);
    }

    /**
     * @return string
     */
    public function getFacultyNumber(): string
    {
        return $this->facultyNumber;
    }

    /**
     * @param string $facultyNumber
     * @throws Exception
     */
    public function setFacultyNumber(string $facultyNumber): void
    {
        if (strlen($facultyNumber) < 5 || strlen($facultyNumber) > 10) {
            throw new Exception("Invalid faculty number!");
        }
        foreach (str_split( $facultyNumber) as $el) {
            if (!is_numeric($el)) {
                throw new Exception('Invalid faculty number!');
            }
        }
        $this->facultyNumber = $facultyNumber;
    }

    public function __toString()
    {
        $output = parent::__toString();
        $output .= "Faculty number: $this->facultyNumber\n";
        return $output;
    }
}