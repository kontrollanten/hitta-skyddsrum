<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-13
 * Time: 07:19
 */

namespace HittaSkyddsrum\ValueObjects;


class Sweref99Position
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function x()
    {
        return $this->x;
    }

    public function y()
    {
        return $this->y;
    }
}