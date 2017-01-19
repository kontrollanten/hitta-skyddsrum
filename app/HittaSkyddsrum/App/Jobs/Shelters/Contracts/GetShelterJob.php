<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-18
 * Time: 18:01
 */

namespace HittaSkyddsrum\App\Jobs\Shelters\Contracts;


interface GetShelterJob
{
    public function handle($id);
}