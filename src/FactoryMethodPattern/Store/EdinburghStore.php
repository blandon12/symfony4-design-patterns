<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 27/12/2017
 * Time: 08:32
 */

namespace App\FactoryMethodPattern\Store;

use App\FactoryMethodPattern\Product\EdinburghBeefPizza;
use App\FactoryMethodPattern\Product\EdinburghCheesePizza;
use App\FactoryMethodPattern\Product\Pizza;

class EdinburghStore extends PizzaStore
{

    public function orderPizza($type): Pizza
    {
        $edinburghPizza = $this->createPizza($type);
        $edinburghPizza->prepare();
        $edinburghPizza->bake();
        $edinburghPizza->box();

        return $edinburghPizza;
    }

    public function createPizza($type): Pizza
    {
        switch ($type) {
            case 'beef':
                $edinburghPizza = new EdinburghBeefPizza();
                break;
            case 'cheese':
                $edinburghPizza = new EdinburghCheesePizza();
                break;
            default:
                $edinburghPizza = new EdinburghBeefPizza();
                break;
        }

        return $edinburghPizza;
    }
}