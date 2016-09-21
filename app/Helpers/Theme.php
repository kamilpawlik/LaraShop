<?php

function theme_name()
{
    return \App\Configuration::valueFor('theme');
}

function theme_path($name = null)
{
    $name = $name ? $name : theme_name();
    return realpath(base_path('resources/themes/' . $name));
}

function theme_assets_path($name = null)
{
    $name = $name ? $name : theme_name();
    return theme_path($name) . '/assets';
}

function theme_relative_url($name = null, $path = null)
{
    $name = $name ? $name : theme_name();
    return '/' . $name . $path ? '/' . $path : null;
}