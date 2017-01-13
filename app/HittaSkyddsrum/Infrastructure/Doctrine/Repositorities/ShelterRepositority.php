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

        $query = $qb
            ->select(['s'])
            ->from('HittaSkyddsrum\Entities\Shelter', 's')
            ->where(
                $qb->expr()->gte('s.position.lat', $position->getLat() - $distance)
            )
            ->andWhere(
                $qb->expr()->lte('s.position.lat', $position->getLat() + $distance)
            )
            ->andWhere(
                $qb->expr()->gte('s.position.long', $position->getLong() - $distance)
            )
            ->andWhere(
                $qb->expr()->lte('s.position.long', $position->getLong() + $distance)
            )
            ->getQuery();

        return $query->getResult();
    }
}