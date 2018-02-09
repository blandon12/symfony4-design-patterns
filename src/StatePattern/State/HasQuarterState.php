<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 09/02/2018
 * Time: 08:46
 */

namespace App\StatePattern\State;


use App\StatePattern\GumballMachine\GumballMachine;

class HasQuarterState extends State
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

    public function ejectQuater()
    {
        echo "A quarter is ejected\n";
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank()
    {
        echo "You turn the crank\n";
        $this->gumballMachine->setState($this->gumballMachine->getSoldState());
    }
}