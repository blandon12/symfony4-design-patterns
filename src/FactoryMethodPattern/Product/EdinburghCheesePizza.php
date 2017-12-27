<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 27/12/2017
 * Time: 08:41
 */

namespace App\FactoryMethodPattern\Product;

class EdinburghCheesePizza extends Pizza
{
    /**
     * LondonBeefPizza constructor.
     */
    public function __construct()
    {
        $this->name = "Edinburgh style cheese pizza";
        $this->dough = "Thicker crust dough";
        $this->sauce = "Plum tomato sauce";
    }

    public function bake()
    {
        echo "Bake for 35 minutes at 350\n";
    }
}