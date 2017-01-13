<?php

/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-08
 * Time: 20:41
 */
namespace HittaSkyddsrum\Entities;

use HittaSkyddsrum\ValueObjects\Position;
use HittaSkyddsrum\ValueObjects\Sweref99Position;

class Shelter
{
    /** @var integer */
    private $id;
    /** @var string */
    private $address;
    /** @var string */
    private $municipality;
    /** @var string */
    private $city;
    /** @var integer */
    private $slots;
    /** @var boolean */
    private $airCleaners;
    /** @var boolean */
    private $filter;
    /** @var string */
    private $shelterId;
    /** @var string */
    private $estateId;
    /** @var string */
    private $goid;
    /** @var Position */
    private $position;
    /** @var Sweref99Position */
    private $sweref99Position;

    public function __construct(
        $id,
        $address,
        $municipality,
        $city,
        $slots,
        $airCleaners,
        $filter,
        $shelterId,
        $estateId,
        $goid,
        $position = null,
        $sweRef99Position
    )
    {
        $this->id = $id;
        $this->address = $address;
        $this->municipality = $municipality;
        $this->city = $city;
        $this->slots = $slots;
        $this->airCleaners = $airCleaners;
        $this->filter = $filter;
        $this->shelterId = $shelterId;
        $this->estateId = $estateId;
        $this->goid = $goid;
        $this->position = $position;
        $this->sweref99Position = $sweRef99Position;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function getSweref99Position()
    {
        return $this->sweref99Position;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getMunicipality()
    {
        return $this->municipality;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getSlots()
    {
        return $this->slots;
    }

    public function getAirCleaners()
    {
        return $this->airCleaners;
    }

    public function getFilter()
    {
        return $this->filter;
    }

    public function getShelterId()
    {
        return $this->shelterId;
    }

    public function getEstateId()
    {
        return $this->estateId;
    }

    public function getGoid()
    {
        return $this->goid;
    }
}