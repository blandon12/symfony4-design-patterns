<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 07/01/2018
 * Time: 21:47
 */

namespace App\CommandPattern\Receiver;

class Light
{
    private $location;

    /**
     * Light constructor.
     *
     * @param string $location
     */
    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function on()
    {
        echo "The light for " . $this->location . " turned on.\n";
    }

    public function off()
    {
        echo "The light for " . $this->location . " turned off.\n";
    }
}