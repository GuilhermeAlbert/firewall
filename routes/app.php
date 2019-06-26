<?php

Route::prefix('admin')->middleware(['auth'])->middleware(['checkAppSettings'])->group(function () {

    // DASHBOARD ROUTES
    Route::prefix('dashboard')->group(function () {
        Route::name('dashboard.')
        ->group(function () {

            // GET ROUTES
            Route::get('/list', 'DashboardController@list')->name('list');
        });
    });

    // SETTINGS ROUTES
    Route::prefix('settings')->group(function () {
        Route::name('settings.')
        ->group(function () {

            // GET ROUTES
            Route::get('/edit/', 'SettingController@edit')->name('edit');

            // POST ROUTES
            Route::post('/edit_settings','SettingController@edit_settings')->name('edit_settings');
        });
    });        
    
    // USERS ROUTES
    Route::prefix('users')->group(function () {
        Route::name('users.')
        ->group(function () {

            // GET ROUTES
            Route::get('/list', 'UserController@list')->name('list');
            Route::get('/add', 'UserController@add')->name('add'); 
            Route::get('/edit/{id}', 'UserController@edit')->name('edit');
            Route::get('/delete_user/{id}','UserController@delete_user')->name('delete_user');    

            // POST ROUTES
            Route::post('/add', 'UserController@add_user')->name('add_user');    
            Route::post('/edit_user','UserController@edit_user')->name('edit_user');                
                                    
        });
    });

    // PERMISSION ROUTES
    Route::prefix('permissions')->group(function () {
        Route::name('permissions.')
        ->group(function () {

            // GET ROUTES
            Route::get('/list', 'PermissionController@list')->name('list');
        });
    });

    // REPORTS ROUTES
    Route::prefix('reports')->group(function () {
        Route::name('reports.')
        ->group(function () {

            // GET ROUTES
            Route::get('/list', 'ReportController@list')->name('list');

            // REPORTS GET ROUTES
            Route::get('/list_access', 'ReportController@list_access')->name('list_access');
            Route::get('/list_deny', 'ReportController@list_deny')->name('list_deny');
            Route::get('/list_allow', 'ReportController@list_allow')->name('list_allow');
            Route::get('/list_devices', 'ReportController@list_devices')->name('list_devices');
            Route::get('/list_groups', 'ReportController@list_groups')->name('list_groups');
            
        });
    });

    // ALLOW ROUTES
    Route::prefix('allow')->group(function () {
        Route::name('allow.')
        ->group(function () {

            // GET ROUTES
            Route::get('/list', 'AllowController@list')->name('list');

            // ALLOW GET ROUTES
            Route::get('/list_by_mac', 'AllowController@list_by_mac')->name('list_by_mac');
            Route::get('/list_by_ip', 'AllowController@list_by_ip')->name('list_by_ip');
            Route::get('/list_by_keywords', 'AllowController@list_by_keywords')->name('list_by_keywords');
            Route::get('/list_by_domains', 'AllowController@list_by_domains')->name('list_by_domains');
        });
    });   

    // DENY ROUTES
    Route::prefix('deny')->group(function () {
        Route::name('deny.')
        ->group(function () {

            // GET ROUTES
            Route::get('/list', 'DenyController@list')->name('list');

            // DENY GET ROUTES
            Route::get('/list_by_mac', 'DenyController@list_by_mac')->name('list_by_mac');
            Route::get('/list_by_ip', 'DenyController@list_by_ip')->name('list_by_ip');
            Route::get('/list_by_keywords', 'DenyController@list_by_keywords')->name('list_by_keywords');                
            Route::get('/list_by_domains', 'DenyController@list_by_domains')->name('list_by_domains');
        });
    });

    // DENY ROUTES
    Route::prefix('monitoring')->group(function () {
        Route::name('monitoring.')
        ->group(function () {

            // GET ROUTES
            Route::get('/list', 'MonitoringController@list')->name('list');

            Route::get('/list_ports', 'MonitoringController@list_ports')->name('list_ports');
            Route::get('/list_http_https', 'MonitoringController@list_http_https')->name('list_http_https');
        });
    });  

    // ACTIVITY LOGS ROUTES
    Route::prefix('activity_logs')->group(function () {
        Route::name('activity_logs.')
        ->group(function () {

            // GET ROUTES
            Route::get('/list', 'ActivityLogController@list')->name('list');
        });
    });

    // PREFERENCES ROUTES
    Route::prefix('preferences')->group(function () {
        Route::name('preferences.')
        ->group(function () {

            // GET ROUTES
            Route::get('/edit', 'PreferenceController@edit')->name('edit');
            
            // POST ROUTES
            Route::post('/edit_preferences','PreferenceController@edit_preferences')->name('edit_preferences');
        });
    });   

    // PROFILE ROUTES
    Route::prefix('profile')->group(function () {
        Route::name('profile.')
        ->group(function () {

            // GET ROUTES
            Route::get('/list', 'ProfileController@list')->name('list');
            Route::get('/edit', 'ProfileController@edit')->name('edit');
        });
    });   
    
    // GROUPS ROUTES
    Route::prefix('groups')->group(function () {
        Route::name('groups.')
        ->group(function () {

            // GET ROUTES
            Route::get('/list', 'GroupController@list')->name('list');
            Route::get('/select_group/{id}', 'GroupController@select_group')->name('select_group');
        });
    });    

    // DEVICES ROUTES
    Route::prefix('devices')->group(function () {
        Route::name('devices.')
        ->group(function () {

            // GET ROUTES
            Route::get('/list', 'DeviceController@list')->name('list');
        });
    });

    // FIREWALL ROUTES
    Route::prefix('firewall')->group(function () {
        Route::name('firewall.')
        ->group(function () {

            // GET ROUTES
            Route::get('/get_ports', 'FirewallController@get_ports')->name('get_ports');
        });
    });
});