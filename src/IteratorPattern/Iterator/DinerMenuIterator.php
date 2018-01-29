<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 29/01/2018
 * Time: 16:38
 */

namespace App\IteratorPattern\Iterator;


class DinerMenuIterator implements Iterator
{
    private $menu;

    private $position;

    /**
     * DinerMenuIterator constructor.
     * @param $menu
     */
    public function __construct($menu)
    {
        $this->menu = $menu;
        $this->position = 0;
    }


    public function hasNext()
    {
        if (!empty($this->menu[$this->position])) {
            return true;
        }
        else {
            return false;
        }
    }

    public function next()
    {
        $next = $this->menu[$this->position];
        $this->position += 1;
        return $next;
    }

    public function remove()
    {
        // TODO: Implement remove() method.
    }

}