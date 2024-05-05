<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/organizers/all', 'App\Http\Controllers\OrganizerController@getAll');
Route::get('/tweets/all', 'App\Http\Controllers\TweetController@getAll');
Route::get('/keynotespeakers/all', 'App\Http\Controllers\KeyNoteSpeakerController@getAll');
Route::get('/specialsessions/all', 'App\Http\Controllers\SpecialSessionController@getAll');
Route::get('/sponsors/all', 'App\Http\Controllers\SponsorController@getAll');