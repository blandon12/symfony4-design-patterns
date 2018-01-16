<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 16/01/2018
 * Time: 08:15
 */

namespace App\FacadePattern;


class HomeTheaterFacade
{
    private $screen;

    private $dvdPlayer;

    private $amplifier;

    /**
     * HomeTheaterFacade constructor.
     * @param $screen
     * @param $dvdPlayer
     * @param $amplifier
     */
    public function __construct(Screen $screen, DvdPlayer $dvdPlayer, Amplifier $amplifier)
    {
        $this->screen = $screen;
        $this->dvdPlayer = $dvdPlayer;
        $this->amplifier = $amplifier;
    }

    public function watchMovie()
    {
        $this->screen->down();
        $this->dvdPlayer->on();
        $this->amplifier->on();
    }
}