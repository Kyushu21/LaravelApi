<?php
use App\Http\Controllers\Api\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/students', [StudentController::class, 'index']);