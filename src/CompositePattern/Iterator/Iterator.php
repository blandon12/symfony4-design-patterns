<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 01/02/2018
 * Time: 22:08
 */

namespace App\CompositePattern\Iterator;


Interface Iterator
{
    public function hasNext();

    public function next();
}