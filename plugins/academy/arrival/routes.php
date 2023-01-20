<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Academy\Arrival\Models\Arrival;

Route::group([
    'prefix' => 'api/v1',
], function (Router $router) {
    $router->get('arrivals', function () {
        return Arrival::all();
    });
    $router->post('arrival', function () {
        $arrival = new Arrival();
        $arrival->name = post('name');
        $arrival->arrival = now();
        $arrival->save();

        return $arrival;
    });
});




