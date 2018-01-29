<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 29/01/2018
 * Time: 16:35
 */

namespace App\IteratorPattern\Aggregate;


interface Menu
{
    public function createIterator();
}