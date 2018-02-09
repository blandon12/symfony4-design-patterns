<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 09/02/2018
 * Time: 08:45
 */

namespace App\StatePattern\State;


use App\StatePattern\GumballMachine\GumballMachine;

class NoQuarterState extends State
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

    public function insertQuarter()
    {
        echo "You insert a quarter\n";
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }
}