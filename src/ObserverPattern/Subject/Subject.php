<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 12/12/2017
 * Time: 15:45
 */

namespace App\ObserverPattern\Subject;

use App\ObserverPattern\Observer\Observer;

interface Subject
{
    public function registerObserver(Observer $observer);

    public function removeObserver(Observer $observer);

    public function notifyObservers();
}