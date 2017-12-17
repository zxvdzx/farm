<?php

Route::group([ 'namespace' => 'Frontend'], function () {
    
    #-- Dashboard
    Route::get('/', array('as' => 'dashboard', 'uses' => 'FrontendDashboardController@index'));
     Route::get('/program', array('as' => 'program', 'uses' => 'ProgramDashboardController@index'));

});
