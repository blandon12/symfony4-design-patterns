<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 27/12/2017
 * Time: 08:27
 */
namespace App\FactoryPattern\Store;

use App\FactoryPattern\Product\Pizza;

abstract class PizzaStore
{
    public abstract function orderPizza($type): Pizza;

    public abstract function createPizza($type): Pizza;
}