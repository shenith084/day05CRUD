<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middlewa group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home.index');
});

Route::get('/student',[StudentController::class,'showData']);
#conect
Route::Post('/SaveData',[StudentController::class,'saveData'])->name('StudentSaveData');
Route::get('/student/edit/{id}',[StudentController::class,'editData'])->name('studentEditData');
Route::Post('/student/update/{id}',[StudentController::class,'updateData'])->name('studentUpdateData');
Route::get('/student/delete/{id}',[StudentController::class,'deleteData'])->name('studentDeleteData');
