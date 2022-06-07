<?php

namespace Customers\providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class CustomerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $moduleName = strtolower(basename(dirname(__DIR__,1)));
        config([
            $moduleName => File::getRequire(getConfigFile($moduleName,'routes'))
        ]);
        $this->loadRoutesFrom(loadRoutes($moduleName,'web'));
        $this->loadViewsFrom(loadViews($moduleName),$moduleName);
        $this->loadTranslationsFrom(loadLangs($moduleName),$moduleName);
        $this->loadMigrationsFrom(loadMigrations($moduleName));
    }
}
