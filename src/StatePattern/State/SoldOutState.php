<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 09/02/2018
 * Time: 08:45
 */

namespace App\StatePattern\State;


use App\StatePattern\GumballMachine\GumballMachine;
use Exception;

class SoldOutState extends State
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
        throw new Exception("The gumball machine is soldout!");
    }
}