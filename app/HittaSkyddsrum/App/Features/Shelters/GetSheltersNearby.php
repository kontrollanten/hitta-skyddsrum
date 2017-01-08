<?php

/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-08
 * Time: 21:53
 */

namespace HittaSkyddsrum\App\Features\Shelters;

use App\Jobs\Positions\Contracts\CreatePositionJob;
use HittaSkyddsrum\App\Features\Shelters\Contracts\GetSheltersNearby as GetSheltersNearbyContract;
use HittaSkyddsrum\App\Foundation\Feature;
use HittaSkyddsrum\App\Jobs\Shelters\Contracts\GetSheltersNearbyJob;
use HittaSkyddsrum\ValueObjects\Position;

class GetSheltersNearby extends Feature implements GetSheltersNearbyContract
{
    public function handle($lat, $long)
    {
        /** @var Position $position */
        $position = $this->run(CreatePositionJob::class, $lat, $long);

        return $this->run(GetSheltersNearbyJob::class, $position, 0.1);
    }
}