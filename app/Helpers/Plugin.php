<?php
function plugin_path($name)
{
    return app_path('Plugins/' . $name);
}

function plugin_migrations_path($name)
{
    return plugin_path($name) . '/database/migrations';
}

function plugin_relative_migrations_path($name)
{
    return 'app/Plugins/' . $name . '/database/migrations';
}

function plugin_assets_path($name)
{
    return plugin_path($name) . '/assets';
}

function plugin_relative_url($name, $path = null)
{
    return '/' . $name . $path ? '/' . $path : null;
}