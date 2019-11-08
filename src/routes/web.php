<?php 

Route::group(['namespace'=>'Manuj\Sender\Http\Controllers'], function()
{
    Route::get('loader',"LoadController@index")->name('loader');
    Route::get("send","LoadController@send")->name("send");
});