<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-08
 * Time: 21:55
 */

namespace HittaSkyddsrum\App\Foundation\Contracts;


interface Feature
{
    public function run($jobClass);
}