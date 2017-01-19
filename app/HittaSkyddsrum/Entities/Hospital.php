<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-19
 * Time: 15:37
 */

namespace HittaSkyddsrum\Entities;


use HittaSkyddsrum\App\Foundation\Contracts\PublicObject;

class Hospital implements PublicObject
{
    protected $position;
    protected $hsaId;
    protected $address;
    protected $name;
    protected $visibleAttributes = [
        'position',
        'hsaId',
        'address',
        'name',
        ];

    public function getPosition()
    {
        return $this->position;
    }

    public function getHsaId()
    {
        return $this->hsaId;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getVisibleAttributes()
    {
        return $this->visibleAttributes;
    }
}