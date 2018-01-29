<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 29/01/2018
 * Time: 16:39
 */

namespace App\IteratorPattern\Aggregate;


use App\IteratorPattern\Iterator\DinerMenuIterator;

/**
 * Class DinerMenu
 * @package App\IteratorPattern\Aggregate
 */
class DinerMenu implements Menu
{
    /**
     * @var array
     */
    private $dinerMenu;

    /**
     * DinerMenu constructor.
     */
    public function __construct()
    {
        $this->dinerMenu = array();
        $this->addItem('dish#1', 12.50);
        $this->addItem('dish#2', 8.90);
        $this->addItem('dish#3', 21.75);
    }

    private function addItem(string $name, float $price)
    {
        $this->dinerMenu[] = array('name' => $name, 'price' => $price);
    }

    public function createIterator()
    {
        return new DinerMenuIterator($this->dinerMenu);
    }
}