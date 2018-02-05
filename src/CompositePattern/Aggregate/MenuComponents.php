<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 01/02/2018
 * Time: 22:33
 */

namespace App\CompositePattern\Aggregate;


use App\CompositePattern\Component\MenuComponent;
use App\CompositePattern\Iterator\ComponentIterator;

class MenuComponents implements Components
{
    /**
     * @var array
     */
    private $components;

    /**
     * MenuComponents constructor.
     */
    public function __construct()
    {
        $this->components = array();
    }

    public function addItem(MenuComponent $menuComponent)
    {
        $this->components[] = $menuComponent;
    }

    public function createIterator()
    {
        return new ComponentIterator($this->components);
    }
}