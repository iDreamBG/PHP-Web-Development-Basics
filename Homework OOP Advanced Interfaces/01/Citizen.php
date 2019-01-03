<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 21.10.2018 г.
 * Time: 15:40
 */

class Citizen implements Person, Identifiable, Birthable
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
    private $birthdate;

    /**
     * Citizen constructor.
     * @param string $name
     * @param string $age
     */
    public function __construct(string $name, string $age, string $id, string $birthdate)
    {
        $this->name = $name;
        $this->age = $age;
        $this->id= $id;
        $this->birthdate= $birthdate;
    }

    public function setName(string $name): void
    {
        $this->name=$name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAge(): string
    {
        return $this->age;
    }

    public function setAge(string $age): void
    {
        $this->age=$age;
    }

    public function __toString()
    {
        return "{$this->getName()}\n{$this->getAge()}\n{$this->getId()}\n{$this->getBirthdate()}";
    }

    /**
     * @return string
     */
    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    public function setBirthdate(string $birthdate): void
    {
        $this->birthdate=$birthdate;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id=$id;
    }
}