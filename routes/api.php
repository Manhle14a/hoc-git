<?php

use App\Http\Controllers\Api\manhle;
use App\Http\Controllers\Api\MusicianController;
use App\Http\Controllers\Api\Manhle1Controller;
use App\Http\Controllers\Api\test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group([
    'prefix' =>'musician',
    'as'=> 'musician.'
],function(){
    // Route::get('/',[MusicianController::class,'listMusician'])->name('listMusician');
    // Route::post('/addPostMusician',[MusicianController::class,'addPostMusician'])->name('addPostMusician');
    // Route::put('/updatePutMusician/{id}',[MusicianController::class,'updatePutMusician'])->name('updatePutMusician');
    // Route::delete('/deleteMusician/{id}',[MusicianController::class,'deleteMusician'])->name('deleteMusician');

    // Route::get('/',[manhle::class,'listManhle'])->name('listManhle');
    // Route::post('/addPostManhle',[manhle::class,'addPostManhle'])->name('addPostManhle');
    // Route::put('/updatePutManhle/{id}',[manhle::class,'updatePutManhle'])->name('updatePutManhle');
    // Route::delete('/deleteManhle/{id}',[manhle::class,'deleteManhle'])->name('deleteManhle');

    Route::get('/',[test::class,'listManhle1'])->name('listManhle1');
    Route::post('/addPostManhle1',[test::class,'addPostManhle1'])->name('addPostManhle1');
    Route::put('/updatePutManhle1/{id}',[test::class,'updatePutManhle1'])->name('updatePutManhle1');
    Route::delete('/deleteManhle1/{id}',[test::class,'deleteManhle1'])->name('deleteManhle1');
  

});
