<?php

Route::group(['middleware' => 'web', 'prefix' => 'example', 'namespace' => 'Modules\Example\Http\Controllers'], function()
{
    Route::get('/', 'ExampleController@index');
});
