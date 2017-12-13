<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 13/12/2017
 * Time: 17:31
 */

namespace App\DecoratorPattern\Decorator;

use App\DecoratorPattern\Component\Beverage;

class Milk extends CondimentDecorator
{
    protected $beverage;

    /**
     * Milk constructor.
     * @param $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost(): float
    {
        return $this->beverage->cost() + 0.50;
    }

    public function getDescription(): string
    {
        return parent::getDescription() . ', milk';
    }
}