<?php

/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-08
 * Time: 21:50
 */

namespace HittaSkyddsrum\App\Jobs\Shelters;

use Doctrine\Common\Collections\ArrayCollection;
use HittaSkyddsrum\Infrastructure\Doctrine\Repositorities\Contracts\ShelterRepository;
use HittaSkyddsrum\ValueObjects\Position;
use HittaSkyddsrum\App\Jobs\Shelters\Contracts\GetSheltersNearbyJob as GetSheltersNearbyJobContract;

class GetSheltersNearbyJob implements GetSheltersNearbyJobContract
{
    private $shelterRepository;

    public function __construct(ShelterRepository $shelterRepository)
    {
        $this->shelterRepository = $shelterRepository;
    }

    /**
     * @param Position $position
     * @return ArrayCollection
     */
    public function handle(Position $position)
    {
        $distance = 0.05;

        while ($distance < 5)
        {
            $shelters = $this->shelterRepository->getCloseTo($position, $distance);

            if (count($shelters) > 0)
            {
                break;
            }

            $distance += 0.05;
        }


        return $shelters;
    }
}