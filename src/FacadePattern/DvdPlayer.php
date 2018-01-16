<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 16/01/2018
 * Time: 08:11
 */

namespace App\FacadePattern;


class DvdPlayer
{
    public function on()
    {
        echo "turn dvd player on\n";
    }

    public function off()
    {
        echo "turn dvd player off\n";
    }
}