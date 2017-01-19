<?php

/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-08
 * Time: 21:23
 */

namespace HittaSkyddsrum\ValueObjects;

use HittaSkyddsrum\App\Foundation\Contracts\PublicObject;

class Position implements PublicObject
{
    /** @var float */
    protected $long;
    /** @var float */
    protected $lat;

    private $visibleAttributes = ['long', 'lat'];

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

    public function getVisibleAttributes()
    {
        return $this->visibleAttributes;
    }
}