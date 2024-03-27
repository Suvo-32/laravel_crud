<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DisplayController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\systemController;
use App\Http\Middleware\loginCheck;

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
    
// });


// Route::resources([
//     'employees' => EmployeeController::class,
// ]);


Route::middleware(['protectedPage'])->resource('employees', EmployeeController::class);


Route::middleware(['protectedPage'])->resource('systems', systemController::class);
  

Route::get('login',[AuthController::class,'loginUser'])->name('login');
Route::post('login/user',[AuthController::class,'UserCheck'])->name('login.user');

Route::get('home',[AuthController::class,'HomeUser'])->name('home')->middleware('protectedPage');

Route::post('logout',[AuthController::class,'destroy'])->name('logout');

Route::get('userdisplay',[DisplayController::class,'display'])->name('userdisplay');

Route::get('chat',[ChatController::class,'userChat'])->name('chat');

Route::post('chat/messege',[ChatController::class,'messegeChat'])->name('chat.messege');


