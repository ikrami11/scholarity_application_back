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

/*Auth::routes(['verify'=>true]);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::view('/permut','permut');
Route::post('/permutEtd','PermutController@permuteEtd');

Route::get('/creercpt','CreerCompteController@creercpt');

Route::view('/rech','rech');
Route::post('/rechmat','RechMatController@rechEtd');


