<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TeacherPOV\StudentController;
use App\Http\Controllers\StudentPOVController;
use App\Http\Controllers\TeacherPOV\ClassController;
use App\Http\Controllers\TeacherPOV\ModuleController;
use App\Http\Controllers\TeacherPOV\NoteController;
use App\Http\Controllers\NotesController;
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
// ----------------------------------------------------------------------------------------------------//

/* WELCOME ROUTE */

Route::get('/', function () {
    return view('welcome');
});


// ----------------------------------------------------------------------------------------------------//

/* AUTHENTIFICATION ROUTE */

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ----------------------------------------------------------------------------------------------------//

/* STUDENT MANAGING ROUTES */

Route::get('/AddStudents',[StudentController::class , 'Show']);

Route::get('/AddStudents',[StudentController::class , 'filter']);

Route::get('/ManageStudents',[StudentController::class , 'Manage']);

Route::post('/Students',[StudentController::class , 'Student']);

// Route::post('/Students',[StudentController::class,'Index'])->name('Students.showclass');

Route::get('/Students',[StudentController::class,'Index']);

Route::get('/Students/{id}/edit', [StudentController::class, 'edit']);

Route::put('/Students/{id}', [StudentController::class, 'update']);

Route::delete('/Students/{id}', [StudentController::class, 'destroy']);

// ----------------------------------------------------------------------------------------------------//

/* CLASSES MANAGING ROUTES */

Route::get('/AddClass', [ClassController::class,'create']);

Route::post('/Classes', [ClassController::class, 'store'])->name('classes.store');

Route::get('/Classes', [ClassController::class, 'index'])->name('classes.index');

Route::get('/ManageClasses', [ClassController::class, 'Manage']);

Route::delete('/Classes/{id}', [ClassController::class, 'destroy']);

// ----------------------------------------------------------------------------------------------------//

/* MODULES MANAGING ROUTES */

Route::get('/ManageModules', [ModuleController::class, 'Manage']);

Route::get('/AddModule', [ModuleController::class, 'create']);

Route::get('/Modules',[ModuleController::class,'index']);

Route::post('/Modules',[ModuleController::class,'store'])->name('Modules.store');

Route::get('/Modules/{id}/edit',[ModuleController::class,'edit']);

Route::put('/Modules/{id}',[ModuleController::class,'update']);

Route::delete('/Modules/{id}', [ModuleController::class, 'destroy']);

// ----------------------------------------------------------------------------------------------------//

/* NOTATION MANAGING ROUTES */

Route::get('/ManageNotes', [NoteController::class, 'Manage']);

// Route::get('/AddNotes', [NoteController::class, 'create']);

Route::get('/AddNotes', [NoteController::class, 'store']);




// ----------------------------------------------------------------------------------------------------//

/* STUDENT POV ROUTES */

Route::get('/Classmates',[StudentPOVController::class , 'index']);


// ----------------------------------------------------------------------------------------------------//

/* NOTES ROUTES */

Route::get('/exam-notes/create', [NotesController::class, 'create'])->name('exam-notes.create');

Route::post('/exam-notes/calculate', [NotesController::class, 'calculate'])->name('exam-notes.calculate');

Route::get('/Notes', [NotesController::class, 'index']);
