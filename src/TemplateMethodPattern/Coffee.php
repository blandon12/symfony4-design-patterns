<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 21/01/2018
 * Time: 22:52
 */

namespace App\TemplateMethodPattern;


class Coffee extends CaffeineBeverage
{

    public function brew()
    {
        echo "brewing coffee beans...\n";
    }

    public function addCondiments()
    {
        echo "adding milk and sugar...\n";
    }
}