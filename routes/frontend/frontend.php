<?php

Route::group([ 'namespace' => 'Frontend'], function () {
    
    #-- Dashboard
    Route::get('/', array('as' => 'dashboard', 'uses' => 'FrontendDashboardController@index'));

});
