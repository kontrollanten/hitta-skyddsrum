<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-12
 * Time: 20:21
 */

namespace HittaSkyddsrum\App\Http\Resources\Shelters;


use HittaSkyddsrum\App\Features\Shelters\Contracts\GetShelter;
use HittaSkyddsrum\App\Features\Shelters\Contracts\GetSheltersNearby;
use HittaSkyddsrum\App\Http\Resources\Controller;
use HittaSkyddsrum\App\Http\Responses\JsonResponse;
use Illuminate\Http\Request;

class SheltersController extends Controller
{
    public function index(Request $request, GetSheltersNearby $getSheltersNearby)
    {
        $shelters = $getSheltersNearby->handle($request->input('lat', 0.0), $request->input('long', 0.0));
        return new JsonResponse($shelters);
    }

    public function show(Request $request, GetShelter $getShelter)
    {
        $id = array_get($request->route()[2], 'id');

        return new JsonResponse($getShelter->handle($id));
    }
}