<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 01/02/2018
 * Time: 22:09
 */

namespace App\CompositePattern\Iterator;

use App\CompositePattern\Component\Menu;
use App\CompositePattern\Component\MenuComponent;

/**
 * Class ComponentIterator
 * @package App\CompositePattern\Iterator
 */
class ComponentIterator implements Iterator
{
    /**
     * @var Menu
     */
    private $menuComponents;

    /**
     * @var int
     */
    private $position;

    /**
     * ComponentIterator constructor.
     * @param $menuComponents
     */
    public function __construct(array $menuComponents)
    {
        $this->menuComponents = $menuComponents;
        $this->position = 0;
    }


    public function hasNext()
    {
        if (!empty($this->menuComponents[$this->position])) {
            return true;
        } else {
            return false;
        }
    }

    public function next()
    {
        $next = $this->menuComponents[$this->position];
        if (assert($next instanceof MenuComponent)) {
            $this->position += 1;
            return $next;
        }
    }
}