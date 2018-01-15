<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 15/01/2018
 * Time: 22:08
 */

namespace App\AdaptPattern\Duck;

interface Duck
{
    public function quack();

    public function fly();
}