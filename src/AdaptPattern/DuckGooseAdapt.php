<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 15/01/2018
 * Time: 22:14
 */

namespace App\AdaptPattern;

use App\AdaptPattern\Duck\Duck;
use App\AdaptPattern\Goose\Goose;

class DuckGooseAdapt implements Duck
{
    private $goose;

    /**
     * DuckGooseAdapt constructor.
     *
     * @param $goose
     */
    public function __construct(Goose $goose)
    {
        $this->goose = $goose;
    }

    public function quack()
    {
        $this->goose->getName();
        $this->goose->shout();
    }

    public function fly()
    {
        for ($i=0; $i<3; $i++) {
            $this->goose->fly();
        }
    }
}