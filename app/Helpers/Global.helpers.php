<?php

use App\Models\setting;

function index()
{
    return 1+1;
}


/**
 * @return global function to return setting data in website
 */
function setting($name)
{
    $settings = setting::where('name', $name)->select('name', 'value')->first();
    return $settings->value;
}