<?php

    Route::prefix('admin')->middleware(['auth'])->group(function () {

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
            });
        });

        // FIREWALL ROUTES
        Route::prefix('firewall')->group(function () {
            Route::name('firewall.')
            ->group(function () {

                // GET ROUTES
                Route::get('/list', 'FirewallController@list')->name('list');
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
    });