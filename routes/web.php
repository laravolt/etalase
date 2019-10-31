<?php

\Illuminate\Support\Facades\Route::group(
    [
        'namespace'  => '\Laravolt\Etalase\Http\Controllers',
        'prefix'     => 'etalase',
        'as'         => 'etalase::',
        'middleware' => ['web'],
    ],
    function ($router) {
        $router->get('search/{query?}', ['uses' => 'SearchController']);
        $router->get('suitable', ['uses' => 'SuitableController']);
        $router->get('semantic-form', ['uses' => 'SemanticFormController@create'])->name('semantic-form.create');
        $router->post('semantic-form', ['uses' => 'SemanticFormController@store'])->name('semantic-form.store');
        $router->post('upload', ['uses' => 'Upload']);
        $router->get('jasper', ['uses' => 'JasperController@index']);
        $router->get('jexcel', ['uses' => 'JexcelController@create'])->name('jexcel.create');
        $router->post('jexcel', ['uses' => 'JexcelController@store'])->name('jexcel.store');
        $router->get('{page}', ['uses' => 'PageController']);
    }
);
