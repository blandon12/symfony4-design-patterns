<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 15/01/2018
 * Time: 22:09
 */

namespace App\AdaptPattern\Goose;

interface Goose
{
    public  function getName();

    public function shout();

    public function fly();
}