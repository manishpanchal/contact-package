<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'manishpanchal\Contact\Http\Controllers'],function(){

    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact/send', 'ContactController@send')->name('contact.send');

});

