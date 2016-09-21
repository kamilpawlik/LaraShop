<?php

namespace App\Console\Commands;

use App\Configuration;
use Illuminate\Console\Command;

class InstallPlugin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'plugin:install 
                            {plugin : Name of the plugin to install}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Installing plugin for LaraShop';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $pluginName = $this->argument('plugin');

        if (!is_dir(plugin_path($pluginName))) {
            $this->error("Plugin $pluginName not found");
        }

        $this->info("Installing plugin $pluginName");

        $step = 0;

        /**
         * Check for plugin migrations
         */
        if (is_dir(plugin_migrations_path($pluginName))) {
            $this->info((++$step) . ". Checking migrations");
            $this->call('migrate', [
                '--path' => plugin_migrations_path($pluginName)
            ]);
        }

        /**
         * Check for plugin assets
         */
        if (is_dir(plugin_assets_path($pluginName))) {

            $this->info((++$step) . ". Linking assets");
            $publicDir = realpath(base_path('public'));
            $targetAssetsDir = $publicDir . '/' . $pluginName;

            if (!is_link($targetAssetsDir)) {
                symlink(plugin_assets_path($pluginName), $targetAssetsDir);
            }

        }

        /**
         * Activate plugin
         */
        $this->info((++$step) . ". Activating plugin");
        $config = Configuration::where(['key' => $pluginName . ':active'])->first();

        if (!$config) {
            Configuration::create([
                'key'   => $pluginName . ':active',
                'value' => 1,
            ]);
        } else {
            $config->value = 1;
            $config->save();
        }
        $this->info('Plugin activated');


    }
}
