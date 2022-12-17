<?php

use App\Http\Controllers\Api\v1\CategoryController;
use App\Http\Controllers\Api\v1\WelcomeController;
use App\Services\Category\CategoryServices;
use App\Services\Tools\PDFFormat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/', WelcomeController::class);

Route::get('/category/report-pdf', [CategoryController::class, 'generateReportPDF'])->name('category.report-pdf');
Route::apiResource('category', CategoryController::class);
