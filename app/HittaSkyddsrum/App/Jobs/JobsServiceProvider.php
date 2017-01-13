<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-12
 * Time: 20:45
 */

namespace HittaSkyddsrum\App\Jobs;

use HittaSkyddsrum\App\Jobs\Positions\CreatePositionJob;
use HittaSkyddsrum\App\Jobs\Shelters\GetSheltersNearbyJob;
use Illuminate\Support\ServiceProvider;
use HittaSkyddsrum\App\Jobs\Shelters\Contracts\GetSheltersNearbyJob as GetSheltersNearbyJobContract;
use HittaSkyddsrum\App\Jobs\Positions\Contracts\CreatePositionJob as CreatePositionJobContract;

class JobsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(GetSheltersNearbyJobContract::class, GetSheltersNearbyJob::class);
        $this->app->bind(CreatePositionJobContract::class, CreatePositionJob::class);
    }
}