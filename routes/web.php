<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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

  

Route::get('login',[AuthController::class,'loginUser'])->name('login');
Route::post('login/user',[AuthController::class,'UserCheck'])->name('login.user');

Route::get('home',[AuthController::class,'HomeUser'])->name('home')->middleware('protectedPage');

route::post('logout',[AuthController::class,'destroy'])->name('logout');
