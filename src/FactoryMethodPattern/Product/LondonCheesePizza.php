<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 27/12/2017
 * Time: 09:29
 */

namespace App\FactoryMethodPattern\Product;


class LondonCheesePizza extends Pizza
{
    /**
     * LondonCheesePizza constructor.
     */
    public function __construct()
    {
        $this->name = "London style cheese pizza";
        $this->dough = "Thin crust dough";
        $this->sauce = "Marinara sauce";
    }
}