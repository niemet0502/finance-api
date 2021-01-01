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


Route::apiResource('user', 'UserController');
Route::get('user/getClientByUser/{id}', 'UserController@getClientByUser'); // les clients creer par un user
Route::get('client/getCompteByClient/{id}','ClientController@getCompteByClient'); // les comptes d'un clients
Route::get('compte/getOperationByCompte/{id}', 'CompteController@getOperationByCompte'); // operation d'un compte
Route::apiResource('client', 'ClientController');
Route::apiResource('profil', "ProfilController");