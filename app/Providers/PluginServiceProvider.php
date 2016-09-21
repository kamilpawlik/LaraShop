<?php

namespace App\Providers;

use File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use View;
use Illuminate\Support\Facades\Blade;

use Illuminate\Database\Migrations\Migrator;

class PluginServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $files = File::allFiles(app_path('plugins'));
        foreach ($files as $file) {
            if (basename($file) == 'config.php') {
                $config = include $file;

                if (!Schema::hasTable('configurations') || !\App\Configuration::valueFor((array_get($config,
                            'name') . ':active'), false)
                ) {
                    continue;
                }

                if (array_has($config, 'view.composers') && is_array(array_get($config, 'view.composers'))) {
                    $this->registerComposers(array_get($config, 'view.composers'));
                }

                if (array_has($config, 'view.paths') && is_array(array_get($config, 'view.paths'))) {
                    $pluginBasePath = $file->getPath();
                    $this->registerViewPaths(array_get($config, 'view.paths'), $pluginBasePath,
                        array_get($config, 'name'));
                }

            }
        }

        $this->registerBladeDirectives();

    }

    public function registerComposers(array $composers)
    {
        foreach ($composers as $view => $composer) {
            View::composer(
                $view, $composer
            );
        }
    }

    /*
     * @TODO: Refactor this part of code to use plugin helper to resolve paths
     */
    public function registerViewPaths(array $paths, $pluginBasePath, $pluginName)
    {
        foreach ($paths as $path) {
            View::addNamespace($pluginName, theme_path() . '/Plugins/' . $pluginName . '/' . $path);
            View::addNamespace($pluginName, $pluginBasePath . '/' . $path);
        }
    }

    public function registerBladeDirectives()
    {
        Blade::directive('pluginjs', function ($arguments) {

            list($name, $path) = explode(',', str_replace(['(', ')', ' ', "'"], '', $arguments));

            return '<script type="text/javascript" src="<?php echo plugin_relative_url("' . $name . '", "' . $path . '") ?>"></script>';
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }

}
