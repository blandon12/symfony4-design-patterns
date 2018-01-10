<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 07/01/2018
 * Time: 21:45
 */

namespace App\CommandPattern\Command;

use App\CommandPattern\Receiver\Fan;

class FanLowCommand extends Command
{
    private $fan;

    private $previousSpeed;

    /**
     * FanOnCommand constructor.
     * @param Fan $fan
     */
    public function __construct(Fan $fan)
    {
        $this->fan = $fan;
    }


    public function excute()
    {
        $this->previousSpeed = $this->fan->getSpeed();
        $this->fan->setLow();
    }

    public function undo()
    {
        if ($this->previousSpeed == 1) {
            $this->fan->setLow();
        } elseif ($this->previousSpeed == 2) {
            $this->fan->setHigh();
        } elseif ($this->previousSpeed == 0) {
            $this->fan->off();
        }
    }

    public function getName() {
        return "FanLowCommand";
    }
}