<?php

/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-08
 * Time: 21:03
 */

namespace HittaSkyddsrum\Infrastructure\Doctrine\Mappings;

use HittaSkyddsrum\Entities\Shelter;
use HittaSkyddsrum\ValueObjects\Position;
use HittaSkyddsrum\ValueObjects\Sweref99Position;
use LaravelDoctrine\Fluent\EntityMapping;
use LaravelDoctrine\Fluent\Fluent;

class ShelterMapping extends EntityMapping
{
    public function mapFor()
    {
        return Shelter::class;
    }

    public function map(Fluent $builder)
    {
        $builder->increments('id');
        $builder->embed(Position::class);
        $builder->embed(Sweref99Position::class);
        $builder->string('address');
        $builder->string('municipality');
        $builder->string('city');
        $builder->integer('slots');
        $builder->boolean('airCleaners');
        $builder->boolean('filter');
        $builder->string('shelterId');
        $builder->string('estateId');
        $builder->string('goid');
    }
}