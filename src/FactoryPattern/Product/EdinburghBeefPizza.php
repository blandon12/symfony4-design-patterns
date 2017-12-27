<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 27/12/2017
 * Time: 08:41
 */

namespace App\FactoryPattern\Product;

class EdinburghBeefPizza extends Pizza
{
    /**
     * LondonBeefPizza constructor.
     */
    public function __construct()
    {
        $this->name = "Edinburgh style beef pizza";
        $this->dough = "Thicker crust dough";
        $this->sauce = "Plum tomato sauce";
    }

    public function bake()
    {
        echo "Bake for 35 minutes at 350\n";
    }

    public function prepare()
    {
        // TODO: Implement prepare() method.
    }
}