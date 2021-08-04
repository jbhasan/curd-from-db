<?php

namespace Sayeed\CrudFromDb;

use Illuminate\Support\ServiceProvider;

class CrudFromDbServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__. '/routes/web.php');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            \Sayeed\CrudFromDb\Console\Commands\CrudFromDbCommand::class,
        ]);

    }
}
