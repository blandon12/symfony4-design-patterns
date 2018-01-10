<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 09/01/2018
 * Time: 23:15
 */

namespace App\CommandPattern\Receiver;

class Fan
{
    const HIGH = 2;

    const LOW = 1;

    const OFF = 0;

    private $location;

    private $speed;

    /**
     * Fan constructor.
     *
     * @param $location
     */
    public function __construct($location)
    {
        $this->location = $location;
        $this->speed = static::OFF;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function setHigh()
    {
        echo "Fan in " . $this->location. " speed is high\n";
        $this->speed = static::HIGH;
    }

    public function setLow()
    {
        echo "Fan " . $this->location. " speed is low\n";
        $this->speed = static::LOW;
    }

    public function Off()
    {
        echo "Fan " . $this->location. " is off\n";
        $this->speed = static::OFF;
    }
}