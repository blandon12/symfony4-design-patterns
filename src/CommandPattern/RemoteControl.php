<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 07/01/2018
 * Time: 21:43
 */
namespace App\CommandPattern;

use App\CommandPattern\Collection\OffCommands;
use App\CommandPattern\Collection\OnCommands;
use App\CommandPattern\Command\Command;
use App\CommandPattern\Command\NoCommand;

class RemoteControl
{
    private $onCommands;

    private $offCommands;

    private $undoCommand;

    /**
     * RemoteControl constructor.
     */
    public function __construct()
    {
        $this->onCommands = new OnCommands();
        $this->offCommands = new OffCommands();

        for ($i=0; $i < 3; $i++) {
            $this->onCommands->addItem($i);
            $this->offCommands->addItem($i);
        }

        $this->undoCommand = new NoCommand();
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand)
    {
        $this->onCommands->loadCommand($slot, $onCommand);
        $this->offCommands->loadCommand($slot, $offCommand);
    }

    public function onButtonWasPushed(int $slot)
    {
        $this->onCommands->getItem($slot)->excute();
        $this->undoCommand = $this->onCommands->getItem($slot);
    }

    public function offButtonWasPushed(int $slot)
    {
        $this->offCommands->getItem($slot)->excute();
        $this->undoCommand = $this->offCommands->getItem($slot);
    }

    public function undoButtonWasPushed()
    {
        echo "undo command is for " . $this->undoCommand->getName() . "\n";
        $this->undoCommand->undo();
    }

    public function toString()
    {
        for ($i=0; $i < 3; $i++) {
            echo "slot" . $i . ":";
            echo "   ";
            echo $this->onCommands->getItem($i)->getName();
            echo "   ";
            echo $this->offCommands->getItem($i)->getName();
            echo "\n";
        }
        echo $this->undoCommand->getName();
        echo "\n\n";
    }
}