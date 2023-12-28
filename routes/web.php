<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demo2cont;
use App\Http\Controllers\formcontroller;
use App\Http\Controllers\trycontroller;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('x',function(){   //path name kuch bhi rkh skte !            //first method 
//     return view('demo');     //view me page name hi likhna padega !
// });



Route::view('x','demo');           // second method


Route::view('y','demo1');


//controller path    

Route::get('z',[demo2cont::class,'abc']);
Route::view('form','form'); //url     pagename 
Route::post('formcode',[formcontroller::class,'formcode']);

Route::view('try','try');
Route::post('trycode',[trycontroller::class,'trycode']);
Route::get('showpage',[trycontroller::class,'show']);
Route::get('delete/{id}',[trycontroller::class,'delete']);
Route::get('formshow',[formcontroller::class,'showf']);
Route::get('delete/{id}',[formcontroller::class,'delete']);
Route::get('edit/{id}',[formcontroller::class,'edit']);
Route::post('update',[formcontroller::class,'update']);
Route::view('file','file');
Route::post('fileuploadcode',[formcontroller::class,'filecode']);
Route::get('fileshow',[formcontroller::class,'showfile']);
Route::get('fedit/{id}',[formcontroller::class,'fedit']);

Route::post('fileupdate',[formcontroller::class,'fileupdate']);
Route::post('searchcode',[formcontroller::class,'searchcode']);  
Route::get('search',[formcontroller::class,'search']);

Route::view('login','login');
Route::post('logincode',[formcontroller::class,'logincode']);

Route::view('dashboard','dashboard');
Route::view('change','change');
Route::post('changecode',[formcontroller::class,'changecode']);
Route::get('logout',[formcontroller::class,'logout']);




