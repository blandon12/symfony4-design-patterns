<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 13/12/2017
 * Time: 17:22
 */

namespace App\DecoratorPattern\Component;

class Espresso extends Beverage
{
    /**
     * Espresso constructor.
     */
    public function __construct()
    {
        $this->description = 'Espresso';
    }

    public function cost(): float
    {
        return 1.99;
    }
}
