<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 31/01/2018
 * Time: 22:52
 */

namespace App\CompositePattern\Component;


use Symfony\Component\Config\Definition\Exception\Exception;

abstract class MenuComponent
{
    public function getName()
    {
        throw new Exception("operation error");
    }

    public function getPrice()
    {
        throw new Exception("operation error");
    }

    public function isVagetarian()
    {
        throw new Exception("operation error");
    }

    public function print()
    {
        throw new Exception("operation error");
    }

    public function add(MenuComponent $menuComponent)
    {
        throw new Exception("operation error");
    }

    public function remove(MenuComponent $menuComponent)
    {
        throw new Exception("operation error");
    }

    public function getChild(int $index)
    {
        throw new Exception("operation error");
    }
}