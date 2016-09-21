<?php

function appendContentToViewSection($section, $content, $view)
{
    $view->with($section, $view->{$section} .
        $content
    );
}