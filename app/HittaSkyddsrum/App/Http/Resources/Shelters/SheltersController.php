<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-12
 * Time: 20:21
 */

namespace HittaSkyddsrum\App\Http\Resources\Shelters;


use HittaSkyddsrum\App\Features\Shelters\Contracts\GetSheltersNearby;
use HittaSkyddsrum\App\Http\Resources\Controller;

class SheltersController extends Controller
{
    public function index(GetSheltersNearby $getSheltersNearby)
    {
        $shelters = $getSheltersNearby->handle();
        return response()->json($shelters);
    }
}