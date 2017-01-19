<?php

/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-19
 * Time: 10:47
 */

namespace HittaSkyddsrum\App\Jobs\Hospitals\Contracts;

use HittaSkyddsrum\ValueObjects\Position;

interface GetClosestHospitalsJob
{
    public function handle(Position $position);
}