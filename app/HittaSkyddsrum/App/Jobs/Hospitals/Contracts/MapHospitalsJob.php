<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-19
 * Time: 15:37
 */

namespace HittaSkyddsrum\App\Jobs\Hospitals\Contracts;


use HittaSkyddsrum\Entities\Hospital;

interface MapHospitalsJob
{

    /**
     * @param array $hospitals
     * @return Hospital[]
     */
    public function handle(array $hospitals);
}