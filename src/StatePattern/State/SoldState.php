<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 09/02/2018
 * Time: 08:42
 */

namespace App\StatePattern\State;


use App\StatePattern\GumballMachine\GumballMachine;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Debug\ExceptionHandler;

class SoldState extends State
{
    private $gumballMachine;

    /**
     * SoldState constructor.
     * @param $gumballMachine
     */
    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function dispense()
    {
        echo "A gumball is dispensed\n";
        $quantity = $this->gumballMachine->getCount();
        $quantity--;
        $this->gumballMachine->setCount($quantity);
        echo "Current quantity is " . $this->gumballMachine->getCount() . "\n";
        if ($this->gumballMachine->getCount() > 0) {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }
}
