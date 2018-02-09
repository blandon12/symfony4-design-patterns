<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 08/02/2018
 * Time: 17:38
 */

namespace App\StrategyPattern\Fly;


class FlyWithWing implements Fly
{
    public function fly()
    {
        echo "I am flying with wing.\n";
    }

}