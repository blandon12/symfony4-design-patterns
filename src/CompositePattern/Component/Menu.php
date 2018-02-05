<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 01/02/2018
 * Time: 07:16
 */

namespace App\CompositePattern\Component;


use App\CompositePattern\Aggregate\MenuComponents;
use App\CompositePattern\Iterator\ComponentIterator;

class Menu extends MenuComponent
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var MenuComponents
     */
    private $menuComponents;

    /**
     * DineMenu constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function print()
    {
        echo "\n" . $this->getName() . "\n";
        echo "------------------------\n";
        $componentIterator = $this->createIterator();
        while ($componentIterator->hasNext()) {
            $menuComponent = $componentIterator->next();
            $menuComponent->print();
        }
    }

    public function add(MenuComponent $menuComponent)
    {
        $this->menuComponents[] = $menuComponent;
    }

    public function getChild(int $index)
    {
        return $this->menuComponents[$index];
    }

    public function createIterator()
    {
        return new ComponentIterator($this->menuComponents);
    }
}