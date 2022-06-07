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
        $moduleName = 'customers';
        config([
            $moduleName => File::getRequire(getConfigFile($moduleName,'routes'))
        ]);
        $this->loadRoutesFrom(loadRoutes($moduleName,'web'));
        $this->loadViewsFrom(loadViews($moduleName),$moduleName);
        $this->loadTranslationsFrom(loadLangs($moduleName),$moduleName);
        $this->loadMigrationsFrom(loadMigrations($moduleName));
    }
}
