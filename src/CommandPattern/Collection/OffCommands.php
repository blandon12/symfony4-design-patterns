<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 07/01/2018
 * Time: 22:25
 */
namespace App\CommandPattern\Collection;

use App\CommandPattern\Command\Command;
use App\CommandPattern\Command\NoCommand;

class OffCommands
{
    private $collection;

    /**
     * OnCommands constructor.
     */
    public function __construct()
    {
        $this->collection = array();
    }

    public function addItem($slot)
    {
        $this->collection[$slot] = new NoCommand();
    }

    public function getItem(int $slot): Command
    {
        return $this->collection[$slot];
    }

    public function extract(): array
    {
        return $this->collection;
    }

    public function loadCommand(int $slot, Command $command)
    {
        $this->collection[$slot] = $command;
    }
}