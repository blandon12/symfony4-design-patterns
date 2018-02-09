<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 08/02/2018
 * Time: 17:39
 */

namespace App\StrategyPattern\Duck;


class WildDuck extends Duck
{
    public function display()
    {
        echo "I am a wild duck\n";
    }
}