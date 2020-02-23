<?php

Auth::routes();

Route::group(['middleware' => 'auth'], function() {

    Route::get('dashboard/visitors', '\Rainieren\Visitors\Http\Controllers\VisitorController@index')->name('visitors');

});
