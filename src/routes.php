<?php
Route::group(['namespace' => 'Enchance\Bleh\Controllers', 'prefix'=>'blehdemo'], function() {
    // Your route goes here
    Route::get('foo', 'BlehController@foo');
});