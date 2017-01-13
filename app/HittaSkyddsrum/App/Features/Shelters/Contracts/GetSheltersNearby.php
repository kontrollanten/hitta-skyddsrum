<?php

/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-08
 * Time: 21:55
 */

namespace HittaSkyddsrum\App\Features\Shelters\Contracts;

interface GetSheltersNearby
{
    public function handle($lat = 0.0, $long = 0.0);
}