<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-12
 * Time: 20:45
 */

namespace HittaSkyddsrum\App\Features;

use HittaSkyddsrum\App\Features\Shelters\GetClosestHospitals;
use HittaSkyddsrum\App\Features\Shelters\GetShelter;
use HittaSkyddsrum\App\Features\Shelters\GetSheltersNearby;
use Illuminate\Support\ServiceProvider;
use HittaSkyddsrum\App\Features\Shelters\Contracts\GetSheltersNearby as GetSheltersNearbyContract;
use HittaSkyddsrum\App\Features\Shelters\Contracts\GetShelter as GetShelterContract;
use HittaSkyddsrum\App\Features\Shelters\Contracts\GetClosestHospitals as GetClosestHospitalsContract;

class FeaturesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(GetSheltersNearbyContract::class, GetSheltersNearby::class);
        $this->app->bind(GetShelterContract::class, GetShelter::class);
        $this->app->bind(GetClosestHospitalsContract::class, GetClosestHospitals::class);
    }
}