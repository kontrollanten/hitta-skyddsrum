<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-12
 * Time: 20:55
 */

namespace HittaSkyddsrum\Infrastructure\Doctrine\Repositorities;

use HittaSkyddsrum\Entities\Shelter;
use Illuminate\Support\ServiceProvider;
use HittaSkyddsrum\Infrastructure\Doctrine\Repositorities\Contracts\ShelterRepository as ShelterRepositoryContract;

class RepositoritiesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ShelterRepositoryContract::class, function ($app) {
            return new ShelterRepositority($app['em'], $app['em']->getClassMetadata(Shelter::class));
        });
    }
}