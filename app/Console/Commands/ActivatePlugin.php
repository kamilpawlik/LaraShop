<?php

namespace App\Console\Commands;

use App\Configuration;
use Illuminate\Console\Command;

class ActivatePlugin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'plugin:activate 
                            {plugin : Name of the plugin to activate}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Activating plugin for LaraShop';

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

        $this->info("Activating plugin $pluginName");

        /**
         * Deactivate plugin
         */
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
