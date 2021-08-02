<?php

use Illuminate\Support\Facades\Route;
// namespace App\Http\Controllers;
use App\Http\Controllers\Home;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CourseCategoryController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseLectureController;
use App\Http\Controllers\ContactController;


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
Route::get('/', [Home::class, 'index']);
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{name}', [CourseController::class, 'courseCategory']);
Route::get('/course-detail/{id}', [CourseController::class, 'detail']);
Route::get('course/{name}', [CourseController::class, 'enroll']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/contact', [AboutUsController::class, 'index']);
Route::post('/contact/message', [ContactController::class, 'store']);


//--------------- Admin Routes -----------------//
Route::prefix('admin')->group(function () {

    Route::get('dashboard', [DashboardController::class, 'index']);
    // home slider
    Route::get('home-slider', [Home::class, 'sliderCreate']);
    Route::post('create/home-slider', [Home::class, 'sliderStore']);
    Route::get('delete/home-slider/{id}', [Home::class, 'sliderDestroy']);
    // Universities
    Route::get('universities', [UniversityController::class, 'index']);
    Route::post('universities/create', [UniversityController::class, 'store']);
    Route::get('universities/destroy/{id}', [UniversityController::class, 'destroy']);
    // Teachers
    Route::get('teachers', [TeacherController::class, 'index']);
    Route::post('teachers/create', [TeacherController::class, 'store']);
    Route::get('teacher/destroy/{id}', [TeacherController::class, 'destroy']);
    //Course Category
    Route::get('course-category', [CourseCategoryController::class, 'index']);
    Route::post('course-category/create', [CourseCategoryController::class, 'store']);
    //Courses
    Route::get('courses', [CourseController::class, 'adminIndex']);
    Route::post('courses/create', [CourseController::class, 'store']);
    Route::get('courses/destroy/{id}', [CourseController::class, 'destroy']);
    //Course Video
    Route::get('course-video', [CourseLectureController::class, 'create']);
    Route::post('course-video/create', [CourseLectureController::class, 'store']);
    Route::get('course-video/destroy/{id}', [CourseLectureController::class, 'destroy']);
    // about us
    Route::get('about-us', [AboutUsController::class, 'create']);
    Route::post('about-us/create', [AboutUsController::class, 'store']);
    Route::get('about-us/destroy/{id}', [AboutUsController::class, 'destroy']);
    
});