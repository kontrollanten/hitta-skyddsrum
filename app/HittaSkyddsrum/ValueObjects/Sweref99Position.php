<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-13
 * Time: 07:19
 */

namespace HittaSkyddsrum\ValueObjects;


use HittaSkyddsrum\App\Foundation\Contracts\PublicObject;

class Sweref99Position implements PublicObject
{
    private $x;
    private $y;

    private $visibleAttributes = ['x', 'y'];

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function getVisibleAttributes()
    {
        return $this->visibleAttributes;
    }
}