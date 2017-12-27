<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 27/12/2017
 * Time: 08:31
 */

namespace App\FactoryPattern\Store;

use App\FactoryPattern\Ingredient\LondonIngredientFactory;
use App\FactoryPattern\Product\BeefPizza;
use App\FactoryPattern\Product\CheesePizza;
use App\FactoryPattern\Product\Pizza;

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
        $londonIngredientFactory = new LondonIngredientFactory();

        switch ($type) {
            case 'beef':
                $londonPizza = new BeefPizza($londonIngredientFactory);
                $londonPizza->setName("London Beef Pizza");
                break;
            case 'cheese':
                $londonPizza = new CheesePizza($londonIngredientFactory);
                $londonPizza->setName("London Cheese Pizza");

                break;
            default:
                $londonPizza = new BeefPizza($londonIngredientFactory);
                $londonPizza->setName("London Default Beef Pizza");
                break;
        }

        return $londonPizza;
    }
}