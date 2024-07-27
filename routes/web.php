<?php

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::resource('links', LinkController::class)->names('links');
Route::get('proyects', [LinkController::class, 'proyects'])->name('proyects');
Route::get('change_status/links/{link}', [LinkController::class, 'change_status'])->name('change.status.links');
Route::get('/test-summernote', [TestController::class, 'index']);
Route::resource('configs', ConfigController::class)->only(['edit', 'update']);
Route::post('/profile/image', [ConfigController::class, 'updateProfileImage'])->name('update_profile_image');
Route::post('cambiarContrasena', [ConfigController::class, 'updatePassword'])->name('update_password');
Route::get('/cambiar-contrasena', [ConfigController::class, 'showChangePasswordForm'])->name('password.change');


Route::get('/', function () {
    return view('welcome');
});



Auth::routes();



Route::get('/home', [HomeController::class, 'index'])->name('home');

