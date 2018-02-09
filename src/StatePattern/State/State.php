<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 09/02/2018
 * Time: 08:40
 */

namespace App\StatePattern\State;

use Symfony\Component\Config\Definition\Exception\Exception;

abstract class State
{
    public function insertQuarter()
    {
        throw new Exception('Operation Error!');
    }

    public function ejectQuater()
    {
        throw new Exception('Operation Error!');
    }

    public function turnCrank()
    {
        throw new Exception('Operation Error!');
    }

    public function dispense()
    {
        throw new Exception('Operation Error!');
    }
}