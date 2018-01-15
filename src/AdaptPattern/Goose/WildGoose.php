<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 15/01/2018
 * Time: 22:29
 */

namespace App\AdaptPattern\Goose;


class WildGoose implements Goose
{
    private $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * WildGoose constructor.
     */
    public function __construct()
    {
        $this->name = 'My name is Wild Goose...';
    }

    public function shout()
    {
        echo "WildGoose is shouting!\n";
    }

    public function fly()
    {
        echo "WildGoose is short-distance flying!\n";
    }
}