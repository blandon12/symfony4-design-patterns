<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 07/01/2018
 * Time: 21:45
 */

namespace App\CommandPattern\Command;

use App\CommandPattern\Receiver\Light;

class LightOnCommand extends Command
{
    private $light;

    /**
     * LightOnCommand constructor.
     * @param $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }


    public function excute()
    {
        $this->light->on();
    }

    public function undo()
    {
        $this->light->off();
    }

    public function getName() {
        return "LightOnCommand";
    }
}