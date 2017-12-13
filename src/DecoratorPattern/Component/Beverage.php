<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 13/12/2017
 * Time: 17:12
 */

namespace App\DecoratorPattern\Component;


/**
 * Class Beverage
 * @package App\DecoratorPattern\Component
 */
abstract class Beverage
{

    /**
     * @var string
     */
    protected $description;

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    public abstract function cost(): float;
}
