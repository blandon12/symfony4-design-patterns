<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 01/02/2018
 * Time: 07:18
 */

namespace App\CompositePattern\Component;


class MenuItem extends MenuComponent
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var double
     */
    private $price;

    /**
     * @var bool
     */
    private $isVegetarian;

    /**
     * Meat1 constructor.
     * @param $name
     * @param $price
     * @param $isVegetarian
     */
    public function __construct(string $name, float $price, bool $isVegetarian)
    {
        $this->name = $name;
        $this->price = $price;
        $this->isVegetarian = $isVegetarian;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return double
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return bool
     */
    public function isVegetarian(): bool
    {
        return $this->isVegetarian;
    }


    public function print()
    {
        echo $this->getName();
        if ($this->isVegetarian()) {
            echo "(v)";
        }
        echo ", " . $this->getPrice();
        echo "\n";
    }
}
