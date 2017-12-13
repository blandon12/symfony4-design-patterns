<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 13/12/2017
 * Time: 17:25
 */

namespace App\DecoratorPattern\Decorator;

use App\DecoratorPattern\Component\Beverage;

abstract class CondimentDecorator extends Beverage
{
    protected $beverage;
    /**
     * CondimentDecorator constructor.
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription();
    }
}
