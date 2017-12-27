<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 27/12/2017
 * Time: 08:32
 */

namespace App\FactoryPattern\Store;

use App\FactoryPattern\Ingredient\EdinburghIngredientFactory;
use App\FactoryPattern\Product\BeefPizza;
use App\FactoryPattern\Product\CheesePizza;
use App\FactoryPattern\Product\EdinburghBeefPizza;
use App\FactoryPattern\Product\EdinburghCheesePizza;
use App\FactoryPattern\Product\Pizza;

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
        $edinburghIngredientFactory = new EdinburghIngredientFactory();

        switch ($type) {
            case 'beef':
                $edinburghPizza = new BeefPizza($edinburghIngredientFactory);
                $edinburghPizza->setName("Edinbugh Beef Pizza");
                break;
            case 'cheese':
                $edinburghPizza = new CheesePizza($edinburghIngredientFactory);
                $edinburghPizza->setName("Edinbugh Cheese Pizza");
                break;
            default:
                $edinburghPizza = new BeefPizza($edinburghIngredientFactory);
                $edinburghPizza->setName("Edinbugh Default Beef Pizza");
                break;
        }

        return $edinburghPizza;
    }
}