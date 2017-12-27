<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 27/12/2017
 * Time: 08:41
 */

namespace App\FactoryMethodPattern\Product;

class LondonBeefPizza extends Pizza
{
    /**
     * LondonBeefPizza constructor.
     */
    public function __construct()
    {
        $this->name = "London style beef pizza";
        $this->dough = "Thin crust dough";
        $this->sauce = "Marinara sauce";
    }
}