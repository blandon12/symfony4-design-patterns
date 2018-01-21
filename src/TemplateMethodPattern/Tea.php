<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 21/01/2018
 * Time: 22:53
 */

namespace App\TemplateMethodPattern;


class Tea extends CaffeineBeverage
{
    public function brew()
    {
        echo "brewing tea bage...\n";
    }

    public function addCondiments()
    {
        echo "add lemon piece...\n";
    }

}