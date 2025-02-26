<?php
//
//use App\Http\Controllers\ProductController;
//use App\Http\Controllers\SubCategoryController;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Route;
//
///*
//|--------------------------------------------------------------------------
//| API Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register API routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| is assigned the "api" middleware group. Enjoy building your API!
//|
//*/
//
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
//
//Route::get('faqs', [\App\Http\Controllers\API\FaqController::class, 'index']);
//Route::get('fields', [\App\Http\Controllers\FieldController::class, 'index']);
//Route::get('blog', [\App\Http\Controllers\BlogController::class, 'index']);
//Route::get('contact', [\App\Http\Controllers\ContactController::class, 'index']);
//Route::get('massages', [\App\Http\Controllers\ContactController::class, 'allMassage']);
//Route::post('massages/store', [\App\Http\Controllers\ContactController::class, 'storeMassage']);
//Route::controller(SubCategoryController::class)->prefix('sub-category')->group(function () {
//    Route::post('/', 'index')->name('sub-category.index');
//    Route::post('/create', 'store')->name('sub-category.store');
//});
//
//Route::controller(ProductController::class)->prefix('product')->group(function () {
//    Route::post('/', 'index')->name('product.index');
//    Route::post('/create', 'store')->name('product.store');
//});
