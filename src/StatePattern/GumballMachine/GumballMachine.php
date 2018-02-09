<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 09/02/2018
 * Time: 08:47
 */

namespace App\StatePattern\GumballMachine;


use App\StatePattern\State\HasQuarterState;
use App\StatePattern\State\NoQuarterState;
use App\StatePattern\State\SoldOutState;
use App\StatePattern\State\SoldState;
use App\StatePattern\State\State;

class GumballMachine
{
    private $noQuarterState;

    private $hasQuarterState;

    private $SoldState;

    private $SoldOutState;

    private $currentState;

    private $count;

    /**
     * GumballMachine constructor.
     * @param $count
     */
    public function __construct($count)
    {
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->SoldState = new SoldState($this);
        $this->SoldOutState = new SoldOutState($this);

        $this->count = $count;
        if ($this->count > 0) {
            $this->setState($this->noQuarterState);
        } else {
            $this->setState($this->SoldOutState);
        }
    }

    /**
     * @return NoQuarterState
     */
    public function getNoQuarterState(): NoQuarterState
    {
        return $this->noQuarterState;
    }

    /**
     * @return HasQuarterState
     */
    public function getHasQuarterState(): HasQuarterState
    {
        return $this->hasQuarterState;
    }

    /**
     * @return SoldState
     */
    public function getSoldState(): SoldState
    {
        return $this->SoldState;
    }

    /**
     * @return SoldOutState
     */
    public function getSoldOutState(): SoldOutState
    {
        return $this->SoldOutState;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param mixed $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    public function setState(State $state)
    {
        $this->currentState = $state;
    }

    public function insertQuarter()
    {
        $this->currentState->insertQuarter();
    }

    public function ejectQuarter()
    {
        $this->currentState->ejectQuarter();
    }

    public function turnCrank()
    {
        $this->currentState->turnCrank();
    }

    public function dispense()
    {
        $this->currentState->dispense();
    }

//    public function refill(int $quantity)
//    {
//        $this->count += $quantity;
//        if ($this->currentState = )
//    }
}