<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', [AnimalController::class, 'index']);
Route::post('/users/store', [AnimalController::class, 'store']);


// student
Route::get('/students', [StudentController::class, 'index']);
Route::post('/students', [StudentController::class, 'store']);
Route::put('/students/{id}', [StudentController::class, 'update']); 
Route::delete('/students/{id}', [StudentController::class, 'destroy']);



Route::post('/animals', function(){
    echo "menambahkan hewan baru";
});

Route::put('/animals/{id}', function($id){
    echo "Mengupdate data Id $id";
});

Route::delete('/animals{$id}', function($id){
    echo "Menghapus data hewan id $id";
});

Route::get('/animals', [AnimalController::class, 'index']);

Route::post('/animals', [AnimalController::class, 'store']);

Route::put('/animals/{id}', [AnimalController::class, 'update']);

Route::delete('/animals', [AnimalController::class, 'destroy']);








