<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route:: get('/example' ,  function (){
//  return "this is an example";
// });

// Route:: get ('/japan' , function (){
//     return "hello japan";
// });
// Route:: get('/user/{id}' ,function($id){
//     return "this is has id {$id}";
// });
// Route ::get ('book/{title?}',function ($title=null){
//     $books=["asp.net","laravel","react","nodejs","java","c"];
//     if ($title == null){
//         return $books;
//     }
//     $book=array_filter( $books,fn($item)=>$item==$title);
//     return $book;
// });

// Route::get ('post/index',[PostController::class,'index']);
// Route::get ('post/example',[PostController::class,'example']);
// Route::get ('post/apple',[PostController::class,'apple']);
// Route::get ('post/apple1/{id}',[PostController::class,'apple1']);

Route::prefix("post")->group( function(){

    Route::get ('/index',[PostController::class,'index']);
    Route::get ('/example',[PostController::class,'example']);
    Route::get ('/apple',[PostController::class,'apple']);
    Route::get ('/apple1/{id}',[PostController::class,'apple1']);
});