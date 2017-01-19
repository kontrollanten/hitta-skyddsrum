<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-08
 * Time: 21:59
 */

namespace HittaSkyddsrum\App\Jobs\Shelters\Contracts;


use HittaSkyddsrum\App\Foundation\Contracts\Job;
use HittaSkyddsrum\ValueObjects\Position;

interface GetSheltersNearbyJob
{
    public function handle(Position $position);
}