<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 07/01/2018
 * Time: 21:58
 */

namespace App\CommandPattern\Command;

class NoCommand extends Command
{
    public function excute()
    {
        return;
    }

    public function getName()
    {
        return 'NoCommand';
    }
}