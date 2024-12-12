<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\PostController;


Route::controller(PostController::class)->group(function(){
    Route::get('/actualites', 'postview')->name('actualites');
    Route::get('/actualites/{post}', 'show')->name('show');
});
