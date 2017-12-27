<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 27/12/2017
 * Time: 08:31
 */

namespace App\FactoryMethodPattern\Store;

use App\FactoryMethodPattern\Product\LondonBeefPizza;
use App\FactoryMethodPattern\Product\LondonCheesePizza;
use App\FactoryMethodPattern\Product\Pizza;

class LondonStore extends PizzaStore
{

    public function orderPizza($type): Pizza
    {
        $londonPizza = $this->createPizza($type);
        $londonPizza->prepare();
        $londonPizza->bake();
        $londonPizza->box();

        return $londonPizza;
    }

    public function createPizza($type): Pizza
    {
        switch ($type) {
            case 'beef':
                $londonPizza = new LondonBeefPizza();
                break;
            case 'cheese':
                $londonPizza = new LondonCheesePizza();
                break;
            default:
                $londonPizza = new LondonBeefPizza();
                break;
        }

        return $londonPizza;
    }
}