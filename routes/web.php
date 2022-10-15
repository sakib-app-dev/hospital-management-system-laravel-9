<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');
Route::post('/appointment',[HomeController::class,'appointment']);
Route::get('/myappointment',[HomeController::class,'myappointment']);
Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/add_doctors_view', [AdminController::class, 'index']);
Route::post('/upload_doctors_info', [AdminController::class, 'upload_info']);

Route::get('/doctors_list', [AdminController::class, 'doctors_list']);
Route::get('/edit_doctor_info/{id}', [AdminController::class, 'edit_doctor_info']);
Route::post('/editdoctor/{id}', [AdminController::class, 'editdoctor']);
Route::get('/delete_doctor/{id}', [AdminController::class, 'delete_doctor']);

Route::get('/view_appoint', [AdminController::class, 'view_appoint']);
Route::get('/approve_appoint/{id}', [AdminController::class, 'approve_appoint']);
Route::get('/cancel_appoint/{id}', [AdminController::class, 'cancel_appoint']);
Route::get('/send_email/{id}', [AdminController::class, 'send_email']);
Route::post('/sending_mail/{id}', [AdminController::class, 'sending_mail']);

