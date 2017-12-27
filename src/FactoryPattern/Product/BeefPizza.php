<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 27/12/2017
 * Time: 08:41
 */

namespace App\FactoryPattern\Product;

use App\FactoryPattern\Ingredient\PizzaIngredientFactoryInterface;

class BeefPizza extends Pizza
{
    /**
     * LondonBeefPizza constructor.
     *
     * @param PizzaIngredientFactoryInterface $pizzaIngredientFactory
     */
    public function __construct(PizzaIngredientFactoryInterface $pizzaIngredientFactory)
    {
        $this->ingredientFactory = $pizzaIngredientFactory;
    }

    public function prepare()
    {
        echo "Preparing " . $this->getName() . "\n";

        $dough = $this->ingredientFactory->createDough();

        $sauce = $this->ingredientFactory->createSauce();
    }
}