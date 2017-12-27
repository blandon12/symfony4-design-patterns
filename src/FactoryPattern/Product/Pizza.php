<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 27/12/2017
 * Time: 08:38
 */

namespace App\FactoryPattern\Product;

abstract class Pizza
{
    public $name;

    public $dough;

    public $sauce;

    public $ingredientFactory;

    public abstract function prepare();

    public function bake()
    {
        echo "Bake for 25 minutes at 350\n";
    }

    public function box()
    {
        echo "Place pizza in official PizzaStore box\n";
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}