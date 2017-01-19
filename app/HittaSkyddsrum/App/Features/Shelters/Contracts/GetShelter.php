<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-18
 * Time: 17:59
 */

namespace HittaSkyddsrum\App\Features\Shelters\Contracts;


interface GetShelter
{
    public function handle($id);
}