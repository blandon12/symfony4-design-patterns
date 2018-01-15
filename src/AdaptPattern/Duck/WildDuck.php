<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 15/01/2018
 * Time: 22:10
 */

namespace App\AdaptPattern\Duck;


class WildDuck implements Duck
{
    /**
     * WildDuck constructor.
     */
    public function __construct()
    {
    }

    public function quack()
    {
        echo "Wild Duck quack!\n";
    }

    public function fly()
    {
        echo "Wild Duck fly!\n";
    }

}