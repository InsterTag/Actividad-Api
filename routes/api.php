<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ApprenticeController;

Route::Resource('areas', TrainingCenterController::class);
Route::Resource('trainingcenters', TrainingCenterController::class);
Route::Resource('computers', ComputerController::class);
Route::Resource('teachers', TeacherController::class);
Route::Resource('courses', CourseController::class);
Route::Resource('apprentices', ApprenticeController::class);



Route::prefix('areaApi')->group(function () {
    Route::post('/', [AreaController::class, 'create']);
});

Route::prefix('apprenApi')->group(function () {
    Route::post('/', [ApprenticeController::class, 'create']);
});

Route::prefix('computerApi')->group(function () {
    Route::post('/', [ComputerController::class, 'create']);
});

Route::prefix('courseApi')->group(function () {
    Route::post('/', [CourseController::class, 'create']);
});

Route::prefix('teacherApi')->group(function () {
    Route::post('/', [TeacherController::class, 'create']);
});

