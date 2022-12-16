<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\contactController;

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

//Route::get('/', function () {
    //return view('base');
//});

Route::get('/index', function () {
    return view('contact.index');
});

Route::get('/second', function () {
    return view('example.second');
});

Route::get('/', function () {
    return view('contact.create');
});

Route::post('/store', [contactController::class,'store']
);

Route::get('/index', [contactController::class,'index']
);

Route::get('/edit/{id}', [contactController::class,'edit']
);

Route::patch('/update/{id}', [contactController::class,'update']
);
Route::delete('/delete/{id}', [contactController::class,'destroy']
);

