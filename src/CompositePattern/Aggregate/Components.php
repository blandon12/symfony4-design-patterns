<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 01/02/2018
 * Time: 22:33
 */

namespace App\CompositePattern\Aggregate;


interface Components
{
    public function createIterator();
}