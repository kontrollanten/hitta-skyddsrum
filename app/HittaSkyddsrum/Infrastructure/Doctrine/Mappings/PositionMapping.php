<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-08
 * Time: 21:39
 */

namespace HittaSkyddsrum\Infrastructure\Doctrine\Mappings;


use HittaSkyddsrum\ValueObjects\Position;
use LaravelDoctrine\Fluent\EmbeddableMapping;
use LaravelDoctrine\Fluent\Fluent;

class PositionMapping extends EmbeddableMapping
{
    public function mapFor()
    {
        return Position::class;
    }

    public function map(Fluent $builder)
    {
        $builder->decimal('long')->precision(10)->scale(6)->nullable();
        $builder->decimal('lat')->precision(10)->scale(6)->nullable();
    }

}