<?php

/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-08
 * Time: 21:25
 */

namespace HittaSkyddsrum\Infrastructure\Doctrine\Repositorities;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
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
        $rsm = new ResultSetMapping();
        $rsm->addEntityResult(Shelter::class, 's');
        $rsm->addFieldResult('s', 'id', 'id');

        $rsm = new ResultSetMappingBuilder($this->getEntityManager());
        $rsm->addRootEntityFromClassMetadata(Shelter::class, 's');

        $query = 'SELECT s.*, 
( 3959 * acos( cos( radians(:lat) ) * 
cos( radians( position_lat ) ) * 
cos( radians( position_long ) - 
radians(:lng) ) + 
sin( radians(:lat) ) * 
sin( radians( position_lat ) ) ) ) 
AS distance FROM shelters s ORDER BY distance ASC LIMIT 0, 100';

        $query = $this->getEntityManager()
            ->createNativeQuery($query, $rsm)
            ->setParameter('lng', '18.0887252')
            ->setParameter('lat', '59.35330880000001');

        return $query
            ->getResult();
    }
}