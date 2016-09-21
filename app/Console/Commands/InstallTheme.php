<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Configuration;


class InstallTheme extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'theme:install 
                            {theme : Name of the theme to install}';
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
        $themeName = $this->argument('theme');

        if (!is_dir(theme_path($themeName))) {
            $this->error("Theme $themeName not found");
        }

        $this->info("Installing theme $themeName");

        $step = 0;

        /**
         * Check for theme assets
         */
        if (is_dir(theme_path($themeName) . '/' . 'assets')) {

            $this->info((++$step) . ". Linking assets");
            $publicDir = realpath(base_path('public'));
            $targetAssetsDir = $publicDir . '/' . $themeName;

            if (!is_link($targetAssetsDir)) {
                symlink(theme_path($themeName) . '/' . 'assets', $targetAssetsDir);
            }

        }

        /**
         * Activate theme
         */
        $this->info((++$step) . ". Activating theme");
        $config = Configuration::where(['key' => 'frontend:theme'])->first();

        if (!$config) {
            Configuration::create([
                'key'   => 'frontend:theme',
                'value' => $themeName,
            ]);
        } else {
            $config->value = $themeName;
            $config->save();
        }
        $this->info('Theme activated');
    }
}
