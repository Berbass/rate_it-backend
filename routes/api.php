<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/**
 * Routes that always give a json response 
 */
Route::middleware('response.json')->group(function () {
	/**
	 * Rate scales routes
	 */
	Route::get('rate-scale/list', 'RateScaleController@list');
	Route::get('rate-scale/{scale}', 'RateScaleController@get');
	Route::post('rate-scale', 'RateScaleController@new');
	Route::put('rate-scale/{scale}', 'RateScaleController@edit');
	Route::delete('rate-scale/{scale}', 'RateScaleController@delete');

	/**
	 * Things routes
	 */
	Route::get('thing/list', 'ThingController@list');
	Route::get('thing/{thing}', 'ThingController@get');
	Route::post('thing', 'ThingController@new');
	Route::put('thing/{thing}', 'ThingController@edit');
	Route::delete('thing/{thing}', 'ThingController@delete');
});
