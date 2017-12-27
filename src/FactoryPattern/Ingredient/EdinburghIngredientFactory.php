<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 27/12/2017
 * Time: 16:58
 */

namespace App\FactoryPattern\Ingredient;

class EdinburghIngredientFactory implements PizzaIngredientFactoryInterface
{

    public function createDough()
    {
        return new ThickCrustDough();
    }

    public function createSauce()
    {
        return new PlumTomatoSauce();
    }
}