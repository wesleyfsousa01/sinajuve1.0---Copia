<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth.basic');

Route::prefix('ping')->group(function () {
    Route::get('', fn (Request $request) => response()->json("<h5>========================PONG========================</h5>\n $request"));
    Route::post('', fn (Request $request) => response()->json("<h5>========================PONG========================</h5>\n $request"));
    Route::delete('', fn (Request $request) => response()->json("<h5>========================PONG========================</h5>\n $request"));
    Route::put('', fn (Request $request) => response()->json("<h5>========================PONG========================</h5>\n $request"));
    Route::patch('', fn (Request $request) => response()->json("<h5>========================PONG========================</h5>\n $request"));
});