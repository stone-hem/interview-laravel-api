<?php

use App\Http\Controllers\NewsController;
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

// Route::middleware('')->group(function () {
Route::controller(NewsController::class)->group(function () {
    Route::get('recent', 'index');
    Route::get('search/{search?}', 'search');
    Route::get('categories/{id}', 'categoryWithNews');
    Route::get('categories', 'categories');
    Route::get('show/{id}', 'show');
});
// });
