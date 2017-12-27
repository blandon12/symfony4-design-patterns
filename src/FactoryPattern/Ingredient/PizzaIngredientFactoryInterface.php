<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 27/12/2017
 * Time: 16:55
 */
namespace App\FactoryPattern\Ingredient;

interface PizzaIngredientFactoryInterface
{
    public function createDough();

    public function createSauce();
}