<?php

use App\Http\Controllers\LancuoiController;
use App\Http\Controllers\manhle;
use App\Http\Controllers\Manhle1Controller;
use App\Http\Controllers\MusicianController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('index');
// });

Route::group([
    'prefix' =>'musician',
    'as'=> 'musician.'
],function(){
    // Route::get('/',[MusicianController::class,'listMusician'])->name('listMusician');
    // Route::get('/addMusician',[MusicianController::class,'addMusician'])->name('addMusician');
    // Route::post('/addPostMusician',[MusicianController::class,'addPostMusician'])->name('addPostMusician');
    // Route::get('/updateMusician/{id}',[MusicianController::class,'updateMusician'])->name('updateMusician');
    // Route::put('/updatePutMusician/{id}',[MusicianController::class,'updatePutMusician'])->name('updatePutMusician');
    // Route::delete('/deleteMusician/{id}',[MusicianController::class,'deleteMusician'])->name('deleteMusician');
   

    // Route::get('/',[manhle::class,'listManhle'])->name('listManhle');
    // Route::get('/addManhle',[manhle::class,'addManhle'])->name('addManhle');
    // Route::post('/addPostManhle',[manhle::class,'addPostManhle'])->name('addPostManhle');
    // Route::get('/updateManhle/{id}',[manhle::class,'updateManhle'])->name('updateManhle');
    // Route::put('/updatePutManhle/{id}',[manhle::class,'updatePutManhle'])->name('updatePutManhle');
    // Route::delete('/deleteManhle/{id}',[manhle::class,'deleteManhle'])->name('deleteManhle');

  
    Route::get('/',[Manhle1Controller::class,'listManhle1'])->name('listManhle1');
    Route::get('/addManhle1',[Manhle1Controller::class,'addManhle1'])->name('addManhle1');
    Route::post('/addPostManhle1',[Manhle1Controller::class,'addPostManhle1'])->name('addPostManhle1');
    Route::get('/updateManhle1/{id}',[Manhle1Controller::class,'updateManhle1'])->name('updateManhle1');
    Route::put('/updatePutManhle1/{id}',[Manhle1Controller::class,'updatePutManhle1'])->name('updatePutManhle1');
    Route::delete('/deleteManhle1/{id}',[Manhle1Controller::class,'deleteManhle1'])->name('deleteManhle1');
  
    // Route::get('/',[LancuoiController::class,'litsLancuoi'])->name('litsLancuoi');
    // Route::get('/addLancuoi',[LancuoiController::class,'addLancuoi'])->name('addLancuoi');
    // Route::post('/addPostLancuoi',[LancuoiController::class,'addPostLancuoi'])->name('addPostLancuoi');
    // Route::get('/updateLancuoi/{id}',[LancuoiController::class,'updateLancuoi'])->name('updateLancuoi');
    // Route::put('/updatePutLancuoi/{id}',[LancuoiController::class,'updatePutLancuoi'])->name('updatePutLancuoi');
    


});