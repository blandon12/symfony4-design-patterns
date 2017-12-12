<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 12/12/2017
 * Time: 15:51
 */

namespace App\ObserverPattern\Observer;


use App\ObserverPattern\Subject\Subject;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    /**
     * @var float
     */
    private $temperature;

    /**
     * @var float
     */
    private $humidity;

    /**
     * @var float
     */
    private $pressure;

    /**
     * CurrentConditionsDisplay constructor.
     *
     * @param Subject $subject
     */
    public function __construct(Subject $subject)
    {
        $subject->registerObserver($this);
    }

    public function update(float $temperature, float $humidity)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;

        $this->display();
    }

    public function display()
    {
        echo 'Current condition display: temperature is ' . $this->temperature . ' and humidity is ' . $this->humidity . '.';
        echo "\n\n";
    }
}
