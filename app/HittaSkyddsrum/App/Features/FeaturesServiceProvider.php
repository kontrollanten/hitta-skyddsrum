<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-12
 * Time: 20:45
 */

namespace HittaSkyddsrum\App\Features;

use HittaSkyddsrum\App\Features\Shelters\GetSheltersNearby;
use Illuminate\Support\ServiceProvider;
use HittaSkyddsrum\App\Features\Shelters\Contracts\GetSheltersNearby as GetSheltersNearbyContract;

class FeaturesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(GetSheltersNearbyContract::class, GetSheltersNearby::class);
    }
}