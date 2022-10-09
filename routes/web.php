<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\Student\StudentController;

// use App\Models\User;

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



Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

/* ======================================================================= *
/* Student Management ---------------------------------------------------- *
========================================================================== */

Route::prefix('/')->group(function() {
    Route::middleware('auth')->group(function() {

        Route::get('home', [StudentController::class,'dashboard'])->name('dashboard');
        
        Route::get('apply', [StudentController::class,'apply'])->name('student.apply');



        Route::get('profile', [StudentController::class,'profile'])->name('profile');
        Route::post('profile', [StudentController::class,'profileUpdate'])->name('update');
        Route::post('profile-pass', [StudentController::class,'updatePass'])->name('updatePass');

    });
});



/* ======================================================================= *
/* Admin Management ------------------------------------------------------ *
========================================================================== */

Route::prefix('/admin')->group(function() {

    Route::get('/',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
    Route::post('/',[LoginController::class,'adminLogin'])->name('admin.admin');

    Route::get('register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
    Route::post('register',[RegisterController::class,'createAdmin'])->name('admin.register');

    Route::middleware('auth:admin')->group(function() {

        Route::get('dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');

        Route::get('instructor', [AdminController::class,'instructor'])->name('admin.instructor');
        Route::post('instructor', [AdminController::class,'instructorStore'])->name('admin.instructorStore');
        Route::get('instructor/{id}', [AdminController::class,'instructordetail']);
        Route::patch('instructor/{id}', [AdminController::class,'instructorupdate']);

        Route::get('student', [AdminController::class,'student'])->name('admin.student');
        Route::post('student', [AdminController::class,'studentStore'])->name('admin.studentStore');
        Route::get('student/{id}', [AdminController::class,'studentdetail']);
        Route::patch('student/{user}', [AdminController::class,'studentupdate']);
        Route::patch('studentpass/{user}', [AdminController::class,'studentpassupdate']);

        Route::get('profile', [AdminController::class,'profile'])->name('admin.profile');
        Route::post('profile', [AdminController::class,'profileUpdate'])->name('admin.profileUpdate');
        Route::post('profile-pass', [AdminController::class,'updatePass'])->name('admin.updatePass');

        // Route::get('security', [AdminController::class,'security'])->name('admin.security');

        Route::get('settings', [AdminController::class,'settings'])->name('admin.settings');
        Route::post('settings', [AdminController::class,'settingsupdate'])->name('admin.settingsupdate');

        Route::post('admin-logout', [AdminController::class,'logout']);
    });
});


/* ======================================================================= *
/* Teacher Management ---------------------------------------------------- *
========================================================================== */

Route::prefix('/teacher')->group(function() {

    Route::get('/',[LoginController::class,'showTeacherLoginForm'])->name('teacher.login-view');
    Route::post('/',[LoginController::class,'teacherLogin'])->name('teacher.teacher');

    Route::get('register',[RegisterController::class,'showTeacherRegisterForm'])->name('teacher.register-view');
    Route::post('register',[RegisterController::class,'createTeacher'])->name('teacher.register');

    Route::middleware('auth:teacher')->group(function() {

        Route::get('dashboard', [TeacherController::class,'dashboard'])->name('teacher.dashboard');

        Route::get('student', [TeacherController::class,'student'])->name('teacher.student');
        Route::post('student', [TeacherController::class,'studentStore'])->name('teacher.studentStore');
        Route::get('student/{id}', [TeacherController::class,'studentdetail']);
        Route::patch('student/{id}', [TeacherController::class,'studentupdate']);
        Route::patch('studentpass/{id}', [TeacherController::class,'studentpassupdate']);

        Route::get('profile', [TeacherController::class,'profile'])->name('instructor.profile');
        Route::post('profile', [TeacherController::class,'profileUpdate'])->name('instructor.update');
        Route::post('profile-pass', [TeacherController::class,'updatePass'])->name('instructor.updatePass');

        Route::post('teacher-logout', [TeacherController::class,'logout']);
    });
});