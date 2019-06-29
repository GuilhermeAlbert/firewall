<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});
// FIREWALL ROUTES
Route::prefix('firewall')->group(function () {
    Route::name('firewall.')
        ->group(function () {

            // GET ROUTES
            Route::get('/get_ports', 'FirewallController@get_ports')->name('get_ports');
        });
});
