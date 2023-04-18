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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/courses', [App\Http\Controllers\CoursesController::class, 'index']);
Route::get('/courses/{id}', [App\Http\Controllers\CoursesController::class, 'getCourse']);
Route::get('/speciality/{id}', [App\Http\Controllers\SpecialityController::class, 'getSpeciality']);
