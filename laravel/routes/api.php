<?php
use App\Http\Controllers\API\StudentController;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("students",[StudentController::class, "index"]);
Route::post("/add-student", [StudentController::class,"store"]);
Route::get(`/edit-student/{id}`, [StudentController::class,"edit"]);
Route::put("update-stuent/{id}",[StudentController::class,"update "]);
Route::delete('delete-student/{id}',[StudentController::class,"destroy"]);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
