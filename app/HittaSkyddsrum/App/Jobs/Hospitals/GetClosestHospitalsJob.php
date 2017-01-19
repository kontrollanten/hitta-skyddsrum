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
        $distance = 10;
        $businessClassificationCode = 1100;

        for ($n=0; $n<10; $n++)
        {
            $url = "http://api.offentligdata.minavardkontakter.se/orgmaster-hsa/v1/hsaObjects?lat={$lat}&long={$lng}&distance={$distance}&businessClassificationCode={$businessClassificationCode}";
            $hospitals = json_decode(
                file_get_contents($url)
            );

            if (count($hospitals) > 0)
            {
                break;
            }

            $distance += 10;
        }

        if (empty($hospitals))
        {
            throw new NoHospitalFoundException();
        }

        return $hospitals;
    }
}