<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-08
 * Time: 22:05
 */

namespace HittaSkyddsrum\App\Jobs\Positions;

use HittaSkyddsrum\App\Jobs\Positions\Contracts\CreatePositionJob as CreatePositionJobContract;
use HittaSkyddsrum\ValueObjects\Position;

class CreatePositionJob implements CreatePositionJobContract
{
    public function handle($lat, $long)
    {
        return new Position($lat, $long);
    }

}