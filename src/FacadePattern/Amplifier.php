<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 16/01/2018
 * Time: 08:12
 */

namespace App\FacadePattern;


class Amplifier
{
    public function on()
    {
        echo "turn amplifier on\n";
    }

    public function off()
    {
        echo "turn amplifier off\n";
    }
}