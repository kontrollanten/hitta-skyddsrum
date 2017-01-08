<?php

/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-08
 * Time: 21:22
 */

namespace HittaSkyddsrum\Infrastructure\Doctrine\Repositorities\Contracts;

use HittaSkyddsrum\Entities\Shelter;
use HittaSkyddsrum\ValueObjects\Position;

interface ShelterRepository
{
    public function store(Shelter $shelter);
    public function getCloseTo(Position $position, $distance);
}