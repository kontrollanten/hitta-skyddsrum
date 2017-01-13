<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-13
 * Time: 07:23
 */

namespace HittaSkyddsrum\Infrastructure\Doctrine\Mappings;


use HittaSkyddsrum\ValueObjects\Sweref99Position;
use LaravelDoctrine\Fluent\EmbeddableMapping;
use LaravelDoctrine\Fluent\Fluent;

class Sweref99PositionMapping extends EmbeddableMapping
{
    public function mapFor()
    {
        return Sweref99Position::class;
    }

    public function map(Fluent $builder)
    {
        $builder->decimal('x')->precision(12)->scale(5);
        $builder->decimal('y')->precision(12)->scale(6);
    }

}