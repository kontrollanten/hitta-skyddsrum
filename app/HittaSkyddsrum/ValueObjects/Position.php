<?php

/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-08
 * Time: 21:23
 */

namespace HittaSkyddsrum\ValueObjects;

class Position
{
    /** @var float */
    private $long;
    /** @var float */
    private $lat;

    public function __construct($lat, $long)
    {
        $this->lat = $lat;
        $this->long = $long;
    }

    public function getLong()
    {
        return $this->long;
    }

    public function getLat()
    {
        return $this->lat;
    }
}