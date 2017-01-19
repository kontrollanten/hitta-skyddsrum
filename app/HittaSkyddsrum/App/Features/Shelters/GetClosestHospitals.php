<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-19
 * Time: 10:55
 */

namespace HittaSkyddsrum\App\Features\Shelters;

use HittaSkyddsrum\App\Features\Shelters\Contracts\GetClosestHospitals as GetClosestHospitalsContract;
use HittaSkyddsrum\App\Features\Shelters\Contracts\GetShelter;
use HittaSkyddsrum\App\Foundation\Feature;
use HittaSkyddsrum\App\Jobs\Hospitals\Contracts\GetClosestHospitalsJob;
use HittaSkyddsrum\Entities\Shelter;

class GetClosestHospitals extends Feature implements GetClosestHospitalsContract
{
    public function handle($id)
    {
        /** @var Shelter $shelter */
        $shelter = $this->run(GetShelter::class, $id);

        return $this->run(GetClosestHospitalsJob::class, $shelter->getPosition());
    }
}