<?php

Route::group(['middleware' => 'web', 'prefix' => 'exampleLight', 'namespace' => 'Modules\ExampleLight\Http\Controllers'], function()
{
    Route::get('/', 'ExampleLightController@index');
});
