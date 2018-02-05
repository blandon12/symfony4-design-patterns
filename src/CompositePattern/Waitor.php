<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 01/02/2018
 * Time: 21:59
 */

namespace App\CompositePattern;


use App\CompositePattern\Component\Menu;
use App\CompositePattern\Component\MenuComponent;
use App\CompositePattern\Component\MenuItem;

class Waitor
{
    private $menuComponent;

    /**
     * Waitor constructor.
     * @param $menuComponent
     */
    public function __construct(MenuComponent $menuComponent)
    {
        $this->menuComponent = $menuComponent;
    }

    public function printMenu()
    {
        $this->menuComponent->print();
    }
}