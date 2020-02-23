<?php



Route::get('dashboard/visitors', '\Rainieren\Visitors\Http\Controllers\VisitorController@index')->name('visitors')->middleware('web');;


