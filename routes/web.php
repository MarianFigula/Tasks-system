<?php

use App\Http\Middleware\CheckRoleTeacher;
use App\Http\Middleware\CheckRoleStudent;
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
Route::group(['middleware' => ['web']], function () {
    Route::get('/problem', [\App\Http\Controllers\ProblemController::class, 'fetchData'])->name("problem");
});
//Route::get('/problem', [\App\Http\Controllers\ProblemController::class, 'fetchData'])->name("problem");

Route::get('/', function () {
    return view('welcome');
});


Route::get('/teacherTutorial', [App\Http\Controllers\TeacherPdfController::class, 'index'])->middleware(CheckRoleTeacher::class);
Route::get('/teacher-pdf', [App\Http\Controllers\TeacherPdfController::class, 'generatePdf'])->name('teacher-pdf');

Route::get('/studentTutorial',[App\Http\Controllers\StudentPdfController::class, 'index'])->middleware(CheckRoleStudent::class);
Route::get('/student-pdf', [App\Http\Controllers\StudentPdfController::class, 'generatePdf'])->name('student-pdf');

Auth::routes();

Route::get('/studentfiles', [App\Http\Controllers\StudentFilesController::class, 'index'])->middleware(CheckRoleStudent::class)->name('studentfiles');
Route::post('/studentfiles', [App\Http\Controllers\StudentFilesController::class, 'update']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/studentstats', [App\Http\Controllers\StudentStatsController::class, 'index'])->middleware(CheckRoleTeacher::class)->name('studentstats');

Route::get('/studentdetails/{id}', [App\Http\Controllers\StudentDetailsController::class, 'getId'])->middleware(CheckRoleTeacher::class)->name('studentdetails');
Route::get('/assigntasks/{id}', [App\Http\Controllers\AssignTasksController::class, 'assign'])->middleware(CheckRoleTeacher::class)->name('assigntasks');
Route::post('/assigntasks', [App\Http\Controllers\AssignTasksController::class, 'insert']);
//Route::post('/assigntasks', [App\Http\Controllers\AssignTasksController::class, 'insert']);
Route::get('/editfiles/{fileid}/{studentid}', [App\Http\Controllers\EditFilesController::class, 'getId'])->middleware(CheckRoleTeacher::class)->name('editfiles1');
Route::post('/editfiles', [App\Http\Controllers\EditFilesController::class, 'edit'])->name('editfiles2');
