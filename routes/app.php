<?php

    Route::prefix('admin')->middleware(['auth'])->group(function () {

        Route::prefix('dashboard')->group(function () {
            Route::name('dashboard.')
                ->group(function () {
        
                    // GET ROUTES
                    Route::get('/list', 'DashboardController@list')->name('list');
            });
        });

        Route::prefix('settings')->group(function () {
            Route::name('settings.')
                ->group(function () {
        
                    // GET ROUTES
                    Route::get('/edit', 'SettingController@edit')->name('edit');
            });
        });        
        
        Route::prefix('users')->group(function () {
            Route::name('users.')
            ->group(function () {

                // GET ROUTES
                Route::get('/list', 'UserController@list')->name('list');
                Route::get('/add', 'UserController@add')->name('add'); 
                Route::get('/edit/{id}', 'UserController@edit')->name('edit');

                // POST ROUTES
                Route::post('/add', 'UserController@add_user')->name('add_user');    
                Route::post('/edit_user','UserController@edit_user')->name('edit_user');
                Route::post('/delete_user','UserController@delete_user')->name('delete_user');    
                                        
            });
        });

        Route::prefix('permissions')->group(function () {
            Route::name('permissions.')
            ->group(function () {

                // GET ROUTES
                Route::get('/list', 'PermissionController@list')->name('list');
            });
        });

        Route::prefix('reports')->group(function () {
            Route::name('reports.')
            ->group(function () {

                // GET ROUTES
                Route::get('/list', 'ReportController@list')->name('list');
            });
        });

        Route::prefix('firewall')->group(function () {
            Route::name('firewall.')
            ->group(function () {

                // GET ROUTES
                Route::get('/list', 'FirewallController@list')->name('list');
            });
        });

        Route::prefix('activity_logs')->group(function () {
            Route::name('activity_logs.')
            ->group(function () {

                // GET ROUTES
                Route::get('/list', 'ActivityLogController@list')->name('list');
            });
        });

        Route::prefix('preferences')->group(function () {
            Route::name('preferences.')
                ->group(function () {
        
                    // GET ROUTES
                    Route::get('/list', 'PreferenceController@list')->name('list');
            });
        });   

        Route::prefix('profile')->group(function () {
            Route::name('profile.')
                ->group(function () {
        
                    // GET ROUTES
                    Route::get('/list', 'ProfileController@list')->name('list');
                    Route::get('/edit', 'ProfileController@edit')->name('edit');
            });
        });                 
    });