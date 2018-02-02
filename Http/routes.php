<?php

Route::group(['middleware' => 'web', 'prefix' => 'rroutlet', 'namespace' => 'Modules\RROutlet\Http\Controllers'], function()
{
    Route::get('/', 'RROutletController@index');
});
