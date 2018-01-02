<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 02/01/2018
 * Time: 08:03
 */

namespace App\SingletonPattern;


class SingletonPattern
{
    private $empty;

    private $boiled;

    private static $uniqueInstance;

    /**
     * SingletonPattern constructor.
     */
    private function __construct()
    {
        $this->empty = true;
        $this->boiled = false;

        echo "A new boiler is created...\n";
    }

    public static function getInstance()
    {
        if (static::$uniqueInstance == null) {
            static::$uniqueInstance = new SingletonPattern();
            echo "created...\n";

            return static::$uniqueInstance;
        }
    }

    public function fill()
    {
        if ($this->isEmpty()) {
            $this->empty = false;
            $this->boiled = false;
        }
    }

    public function boil()
    {
        if (!$this->isEmpty() && !$this->isBoiled()) {
            $this->boiled = true;
        }
    }

    public function drain()
    {
        if (!$this->isEmpty() && !$this->isBoiled()) {
            $this->empty = true;
        }
    }

    public function isEmpty() {
        return $this->empty;
    }

    public function isBoiled()
    {
        return $this->boiled;
    }
}