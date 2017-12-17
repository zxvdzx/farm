<?php

Route::group([ 'namespace' => 'Frontend'], function () {
    
    #-- Dashboard
    Route::get('/', array('as' => 'dashboard', 'uses' => 'FrontendDashboardController@index'));
    Route::get('/program', array('as' => 'program', 'uses' => 'ProgramDashboardController@index'));
    Route::get('/contact', array('as' => 'contact', 'uses' => 'ContactDashboardController@index'));

});
