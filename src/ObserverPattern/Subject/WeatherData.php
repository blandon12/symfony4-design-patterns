<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 12/12/2017
 * Time: 15:46
 */

namespace App\ObserverPattern\Subject;

use App\ObserverPattern\Observer\Observer;

class WeatherData implements Subject
{
    /**
     * @var array
     */
    private $observers;

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
     * WeatherData constructor.
     */
    public function __construct()
    {
        $this->observers = array();
    }

    public function registerObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer)
    {
        // TODO: Implement removeObserver() method.
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            if (!$observer instanceof Observer) {
                continue;
            }

            $observer->update($this->temperature, $this->humidity);
        }
    }

    public function getTemperature()
    {
        return $this->temperature;
    }

    public function getHumidity()
    {
        return $this->humidity;
    }

    public function getPressure()
    {
        return $this->pressure;
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temperature, float $humidity)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->measurementsChanged();
    }
}