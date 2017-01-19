<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-19
 * Time: 10:54
 */

namespace HittaSkyddsrum\App\Features\Shelters\Contracts;


interface GetClosestHospitals
{
    public function handle($id);
}