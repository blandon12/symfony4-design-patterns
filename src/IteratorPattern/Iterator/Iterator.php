<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 29/01/2018
 * Time: 16:36
 */

namespace App\IteratorPattern\Iterator;


interface Iterator
{
    public function hasNext();

    public function next();

    public function remove();
}