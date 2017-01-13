<?php

namespace HittaSkyddsrum\App\Foundation;

use HittaSkyddsrum\App\Foundation\PublicObjectRender;
use Illuminate\Support\ServiceProvider;

use HittaSkyddsrum\App\Foundation\Contracts\PublicObjectRender as PublicObjectRenderContract;

class FoundationServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PublicObjectRenderContract::class, PublicObjectRender::class);
    }
}
