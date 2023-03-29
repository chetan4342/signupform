<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\SignupForm;

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



Route::get('/', function (){
    echo "hello world";
});

Route::get('demo/{name}', function($name){
    $data = compact('name');
    return view('demo')->with($data);
});
   
Route::get('/signup', [SignupForm::class, 'index']);
Route::POST('/signup', [SignupForm::class, 'submit']);

