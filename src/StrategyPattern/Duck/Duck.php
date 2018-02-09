<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 08/02/2018
 * Time: 17:31
 */

namespace App\StrategyPattern\Duck;

use App\StrategyPattern\Fly\Fly;

abstract class Duck
{
    /**
     * @var Fly
     */
    protected $fly;

    /**
     * @param Fly $fly
     */
    public function setFly(Fly $fly)
    {
        $this->fly = $fly;
    }

    public function fly()
    {
        $this->fly->fly();
    }

    public abstract function display();
}