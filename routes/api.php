<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */


// Route::get('/contacts', [ContactController::class, 'index']);

// // create route for store contact
// Route::post('/contacts', [ContactController::class, 'store']);

// // create route for update
// Route::put('/contacts/{contact}', [ContactController::class, 'update']);

// // create route for delete
// Route::delete('/contacts/{contact}', [ContactController::class, 'destroy']);

// // create router for show
// Route::get('/contacts/{contact}', [ContactController::class, 'show']);

// create group route for contacts
// Route::group(['prefix' => 'contacts'], function () {
//     // create route for store contact
//     Route::post('/', [ContactController::class, 'store']);

//     // create route for update
//     Route::put('/{contact}', [ContactController::class, 'update']);

//     // create route for delete
//     Route::delete('/{contact}', [ContactController::class, 'destroy']);

//     // create router for show
//     Route::get('/{contact}', [ContactController::class, 'show']);

//     // create router for index
//     Route::get('/', [ContactController::class, 'index']);
// });


// create an api resource route for contact
Route::apiResource('/contacts', ContactController::class);
