<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 23.10.2018 г.
 * Time: 18:57
 */

class Ferrary implements Params
{
    /**
     * @var string
     */
    private $driver;

    /**
     * Ferrary constructor.
     * @param string $driver
     */
    public function __construct(string $driver)
    {
        $this->driver = $driver;
    }

    /**
     * @return string
     */
    public function getDriver(): string
    {
        return $this->driver;
    }

    /**
     * @param string $driver
     */
    public function setDriver(string $driver): void
    {
        $this->driver = $driver;
    }


    public function carParams($driver): void
    {
        echo "488-Spider/Brakes!/Zadu6avam sA!/{$driver}";
    }
}