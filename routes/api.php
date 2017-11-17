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

// Protect APIs with JWT
Route::group(['middleware' => 'auth.jwt'], function () {
	// /api/clubs endpoints
	Route::apiResource('clubs', 'ClubController');
	// /api/clubs/{club_id}/activities endpoints
	Route::group(['prefix' => 'clubs'], function () {
		Route::apiResource('{club}/activities', 'ActivityController');
	});
});

// signup / signin users
Route::post('user/signup', 'UserController@signup');
Route::post('user/signin', 'UserController@signin');