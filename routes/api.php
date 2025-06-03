<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ComputerController;


Route::Resource('areas', AreaController::class);        
Route::Resource('training-centers', TrainingCenterController::class);
Route::Resource('computers', ComputerController::class);

