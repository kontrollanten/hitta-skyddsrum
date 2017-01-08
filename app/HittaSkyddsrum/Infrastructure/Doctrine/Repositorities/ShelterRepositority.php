<?php

/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-08
 * Time: 21:25
 */

namespace HittaSkyddsrum\Infrastructure\Doctrine\Repositorities;

use Doctrine\ORM\EntityRepository;
use HittaSkyddsrum\Entities\Shelter;
use HittaSkyddsrum\Infrastructure\Doctrine\Repositorities\Contracts\ShelterRepository as ShelterRepositoryContract;
use HittaSkyddsrum\ValueObjects\Position;

class ShelterRepositority extends EntityRepository implements ShelterRepositoryContract
{

    public function store(Shelter $shelter)
    {
        $this->getEntityManager()->persist($shelter);
        $this->getEntityManager()->flush($shelter);
    }

    public function getCloseTo(Position $position, $distance)
    {
        $qb = $this
            ->getEntityManager()
            ->createQueryBuilder();

        return $qb
            ->select(['p'])
            ->where(
                $qb->expr()->gte('lat', $position->getLat() - $distance)
            )
            ->andWhere(
                $qb->expr()->lte('lat', $position->getLat() + $distance)
            )
            ->andWhere(
                $qb->expr()->gte('long', $position->getLat() - $distance)
            )
            ->andWhere(
                $qb->expr()->lte('long', $position->getLat() + $distance)
            )
            ->getQuery()->getResult();
    }
}