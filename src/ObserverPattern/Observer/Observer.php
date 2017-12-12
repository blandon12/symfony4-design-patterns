<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 12/12/2017
 * Time: 15:51
 */

namespace App\ObserverPattern\Observer;

interface Observer
{
    public function update(float $temperature, float $humidity);
}