<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-08
 * Time: 21:56
 */

namespace HittaSkyddsrum\App\Foundation;

use HittaSkyddsrum\App\Foundation\Contracts\Feature as FeatureContract;

class Feature implements FeatureContract
{
    public function run($jobClass)
    {
        $job = app($jobClass);
        $args = array_slice(func_get_args(), 1);

        return call_user_func_array(array($job, 'handle'), $args);
    }
}