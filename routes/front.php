<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontController;

// Route::get('front',function(){
//     return view('front_agency');
// });
// Route::get('about',function(){
//     return view('about');
// });

// Route::get('hoem',function(){
//     return view(front_home);
// });

Route::get('/',[frontController::class,'index'])->name(name:'front.home');
Route::get('/about',[frontController::class,'about'])->name(name:'front.about');
Route::get('/services',[frontController::class,'services'])->name(name:'front.services');
Route::get('/package',[frontController::class,'package'])->name(name:'front.package');
Route::get('/contact',[frontController::class,'contact'])->name(name:'front.contact');
Route::get('/destination',[frontController::class,'destination'])->name(name:'front.destination');
Route::get('/booking',[frontController::class,'booking'])->name(name:'front.booking');
Route::get('/testimonial',[frontController::class,'testimonial'])->name(name:'front.testimonial');
Route::get('/guides',[frontController::class,'guides'])->name(name:'front.guides');
Route::get('/error',[frontController::class,'error'])->name(name:'front.error');