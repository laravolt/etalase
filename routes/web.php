<?php

\Illuminate\Support\Facades\Route::group(
    [
        'namespace'  => '\Laravolt\Etalase\Http\Controllers',
        'prefix'     => 'etalase',
        'as'         => 'etalase::',
        'middleware' => ['web', 'auth'],
    ],
    function ($router) {
        $router->get('search/{query?}', ['uses' => 'SearchController']);
        $router->get('suitable', ['uses' => 'SuitableController']);
        $router->get('{page}', ['uses' => 'PageController']);
    }
);
