<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
 */

// Load routes from the configuration file
$routeGroups = config('api_routes');

foreach ($routeGroups as $group) {
    foreach ($group['routes'] as $route) {
        Route::match([$route['method']], $route['uri'], $route['action'])->name($route['name']);
    }
}
