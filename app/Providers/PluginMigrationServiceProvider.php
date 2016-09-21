<?php

namespace App\Providers;

use Illuminate\Database\MigrationServiceProvider;
use Illuminate\Support\ServiceProvider;

class PluginMigrationServiceProvider extends MigrationServiceProvider
{
    protected function registerMigrator()
    {
        $this->app->singleton('migrator', function ($app) {
            $repository = $app['migration.repository'];

            return new \App\Extensions\ShopMigrator($repository, $app['db'], $app['files']);
        });
    }
}
