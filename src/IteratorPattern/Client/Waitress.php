<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 29/01/2018
 * Time: 17:20
 */

namespace App\IteratorPattern\Client;


use App\IteratorPattern\Aggregate\DinerMenu;

class Waitress
{
    private $dinerMenu;

    /**
     * Waitress constructor.
     * @param DinerMenu $dinerMenu
     */
    public function __construct(DinerMenu $dinerMenu)
    {
        $this->dinerMenu = $dinerMenu;
    }

    public function printMenu()
    {
        $dinerMenuIterator = $this->dinerMenu->createIterator();
        while ($dinerMenuIterator->hasNext()) {
            foreach ($dinerMenuIterator->next() as $key => $attribute) {
                echo $key . " is " . $attribute . " ";
            }
            echo "\n";
        }
    }
}