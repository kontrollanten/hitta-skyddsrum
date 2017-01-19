<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-12
 * Time: 20:45
 */

namespace HittaSkyddsrum\App\Jobs;

use HittaSkyddsrum\App\Jobs\Hospitals\GetClosestHospitalsJob;
use HittaSkyddsrum\App\Jobs\Hospitals\MapHospitalsJob;
use HittaSkyddsrum\App\Jobs\Positions\CreatePositionJob;
use HittaSkyddsrum\App\Jobs\Shelters\GetShelterJob;
use HittaSkyddsrum\App\Jobs\Shelters\GetSheltersNearbyJob;
use Illuminate\Support\ServiceProvider;
use HittaSkyddsrum\App\Jobs\Shelters\Contracts\GetSheltersNearbyJob as GetSheltersNearbyJobContract;
use HittaSkyddsrum\App\Jobs\Positions\Contracts\CreatePositionJob as CreatePositionJobContract;
use HittaSkyddsrum\App\Jobs\Shelters\Contracts\GetShelterJob as GetShelterJobContract;
use HittaSkyddsrum\App\Jobs\Hospitals\Contracts\GetClosestHospitalsJob as GetClosestHospitalsJobContract;
use HittaSkyddsrum\App\Jobs\Hospitals\Contracts\MapHospitalsJob as MapHospitalsJobContract;

class JobsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(GetSheltersNearbyJobContract::class, GetSheltersNearbyJob::class);
        $this->app->bind(CreatePositionJobContract::class, CreatePositionJob::class);
        $this->app->bind(GetShelterJobContract::class, GetShelterJob::class);
        $this->app->bind(GetClosestHospitalsJobContract::class, GetClosestHospitalsJob::class);
        $this->app->bind(MapHospitalsJobContract::class, MapHospitalsJob::class);
    }
}