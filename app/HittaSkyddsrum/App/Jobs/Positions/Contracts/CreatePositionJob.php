<?php

/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-08
 * Time: 22:04
 */

namespace HittaSkyddsrum\App\Jobs\Positions\Contracts;

interface CreatePositionJob
{
    public function handle($lat, $long);
}