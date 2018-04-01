<?php
declare(strict_types=1);

namespace HomePage\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;

class HomePageServiceProvider extends ServiceProvider
{

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->resolveProvider(HomePageRoutesServiceProvider::class)->boot();

        $package = 'HomePage';
        $this->loadViewsFrom(base_path() . sprintf('/app/%s/Presentation/resources/views',$package), $package);
    }

}
