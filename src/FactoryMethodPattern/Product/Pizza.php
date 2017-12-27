<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 27/12/2017
 * Time: 08:38
 */

namespace App\FactoryMethodPattern\Product;

abstract class Pizza
{
    public $name;

    public $dough;

    public $sauce;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function prepare()
    {
        echo "Preparing " . $this->name . "\n";
        echo "Tossing " . $this->dough . "\n";
        echo "Adding " . $this->sauce . "\n";
    }

    public function bake()
    {
        echo "Bake for 25 minutes at 350\n";
    }

    public function box()
    {
        echo "Place pizza in official PizzaStore box\n\n";
    }
}