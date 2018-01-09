<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 07/01/2018
 * Time: 21:44
 */

namespace App\CommandPattern\Command;

abstract class Command
{
    public abstract function excute();

    public abstract function undo();

    public abstract function getName();
}