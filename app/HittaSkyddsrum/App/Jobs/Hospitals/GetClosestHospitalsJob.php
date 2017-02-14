<?php

/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-19
 * Time: 10:49
 */

namespace HittaSkyddsrum\App\Jobs\Hospitals;

use HittaSkyddsrum\App\Jobs\Hospitals\Contracts\GetClosestHospitalsJob as GetClosestHospitalsJobContract;
use HittaSkyddsrum\ValueObjects\Position;

class GetClosestHospitalsJob implements GetClosestHospitalsJobContract
{
    public function handle(Position $position)
    {
        $lat = $position->getLat();
        $lng = $position->getLong();
        $businessClassificationCode = 1100;

        for ($distance=500; $distance<1000; ($distance+100))
        {
            $url = "http://api.offentligdata.minavardkontakter.se/orgmaster-hsa/v1/hsaObjects?lat={$lat}&long={$lng}&distance={$distance}&businessClassificationCode={$businessClassificationCode}";
            $hospitals = json_decode(
                file_get_contents($url),
                true
            );

            if (count($hospitals) > 0)
            {
                break;
            }
        }

        if (empty($hospitals))
        {
            throw new NoHospitalFoundException();
        }

        return $hospitals;
    }
}