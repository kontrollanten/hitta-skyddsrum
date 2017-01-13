<?php

/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-13
 * Time: 20:15
 */

namespace HittaSkyddsrum\App\Http\Resources\Hospitals;

use HittaSkyddsrum\App\Http\Resources\Controller;
use HittaSkyddsrum\App\Http\Responses\JsonResponse;

class HospitalsController extends Controller
{
    public function index()
    {
        $lat = 0.0;
        $lng = 0.0;
        $distance = 100;
        $businessClassificationCode = 'unknown';

        return new JsonResponse(
            json_decode(
                file_get_contents("http://api.offentligdata.minavardkontakter.se/orgmaster-hsa/v1/hsaObjects?lat={$lat}&long={$lng}&distance={$distance}&businessClassificationCode={$businessClassificationCode}")
            )
        );
    }
}