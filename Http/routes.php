<?php

Route::group(['middleware' => 'web', 'prefix' => 'exec', 'namespace' => 'Modules\Exec\Http\Controllers'], function()
{
    Route::get('/', 'ExecController@index');
});
