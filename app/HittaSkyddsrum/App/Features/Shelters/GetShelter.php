<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-18
 * Time: 18:00
 */

namespace HittaSkyddsrum\App\Features\Shelters;

use HittaSkyddsrum\App\Features\Shelters\Contracts\GetShelter as GetShelterContract;
use HittaSkyddsrum\App\Foundation\Feature;
use HittaSkyddsrum\App\Jobs\Shelters\Contracts\GetShelterJob;

class GetShelter extends Feature implements GetShelterContract
{
    public function handle($id)
    {
        return $this->run(GetShelterJob::class, $id);
    }
}