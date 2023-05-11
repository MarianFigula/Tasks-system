<?php

use App\Http\Middleware\CheckRoleTeacher;
use Illuminate\Support\Facades\Route;

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
Route::get('/index', function () {
    return view('index');
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/teacherTutorial', [App\Http\Controllers\TeacherPdfController::class, 'index']);
Route::get('/teacher-pdf', [App\Http\Controllers\TeacherPdfController::class, 'generatePdf'])->name('teacher-pdf');

Route::get('/studentTutorial',[App\Http\Controllers\StudentPdfController::class, 'index']);
Route::get('/student-pdf', [App\Http\Controllers\StudentPdfController::class, 'generatePdf'])->name('student-pdf');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/studentstats', [App\Http\Controllers\StudentStatsController::class, 'index'])
    ->name('studentstats');

Route::get('/studentdetails/{id}', [App\Http\Controllers\StudentDetailsController::class, 'getId'])->name('studentdetails');
Route::get('/assigntasks/{id}', [App\Http\Controllers\AssignTasksController::class, 'assign'])->name('assigntasks');
Route::post('/assigntasks', [App\Http\Controllers\AssignTasksController::class, 'insert']);
//Route::post('/assigntasks', [App\Http\Controllers\AssignTasksController::class, 'insert']);
Route::get('/editfiles/{fileid}/{studentid}', [App\Http\Controllers\EditFilesController::class, 'getId'])->name('editfiles1');
Route::post('/editfiles', [App\Http\Controllers\EditFilesController::class, 'edit'])->name('editfiles2');
