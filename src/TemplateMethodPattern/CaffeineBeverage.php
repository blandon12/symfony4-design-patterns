<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 21/01/2018
 * Time: 22:47
 */

namespace App\TemplateMethodPattern;


abstract class CaffeineBeverage
{
    public final function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    public function boilWater()
    {
        echo "boiling water...\n";
    }

    public function pourInCup()
    {
        echo "pouring beverage in cup...\n";
    }

    public abstract function brew();

    public abstract function addCondiments();
}