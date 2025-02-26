<?php

use App\Http\Controllers\AdminControllers\AccommodationController;
use App\Http\Controllers\AdminControllers\AddonsController;
use App\Http\Controllers\AdminControllers\BlogController;
use App\Http\Controllers\AdminControllers\CategoryController;
use App\Http\Controllers\AdminControllers\ContactContoller;
use App\Http\Controllers\AdminControllers\DashboardController;
use App\Http\Controllers\AdminControllers\FAQsController;
use App\Http\Controllers\AdminControllers\ItineraryController;
use App\Http\Controllers\AdminControllers\MediaController;
use App\Http\Controllers\AdminControllers\MessagesController;
use App\Http\Controllers\AdminControllers\PackageContentController;
use App\Http\Controllers\AdminControllers\ProgramsController;
use App\Http\Controllers\AdminControllers\PromoReferralController;
use App\Http\Controllers\AdminControllers\SliderController;
use App\Http\Controllers\AdminControllers\SubCategoryController;
use App\Http\Controllers\AdminControllers\TailorMadeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\HomePageController::class,'index'])->name('home');

Route::get('/packages/{id}', [\App\Http\Controllers\PackageController::class,'index'])->name('packages');

Route::get('/details/{id}', [\App\Http\Controllers\PackageController::class,'details'])->name('details');

Route::post('/booking', [\App\Http\Controllers\PackageController::class,'storeBooking'])->name('details.booking');
Route::post('/tailor-made/store', [\App\Http\Controllers\TailorMadeController::class,'store'])->name('tailromade.store');



Route::get('/FAQ', [\App\Http\Controllers\HomePageController::class,'faqsPage'])->name('faq');

Route::get('/tailor-made', [\App\Http\Controllers\TailorMadeController::class,'index'])->name('tailor');



Route::get('/contact-us', [\App\Http\Controllers\ContactController::class,'index'])->name('contact');
Route::post('/contact-us/message', [\App\Http\Controllers\ContactController::class,'store'])->name('contact-us.message');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index']);

    Route::controller(CategoryController::class)->prefix('category')->group(function () {
        Route::get('/', 'index')->name('category.index');
        Route::post('/store', 'store')->name('category.store');
        Route::get('/create', 'create')->name('category.create');
        Route::get('/edit/{id}', 'edit')->name('category.edit');
        Route::post('/update/{id}', 'update')->name('category.update');
        Route::delete('/destroy/{id}', 'destroy')->name('category.destroy');
    });

    Route::controller(SubCategoryController::class)->prefix('subcategory')->group(function () {
        Route::get('/', 'index')->name('subcategory.index');
        Route::post('/store', 'store')->name('subcategory.store');
        Route::get('/create', 'create')->name('subcategory.create');
        Route::get('/edit/{id}', 'edit')->name('subcategory.edit');
        Route::post('/update/{id}', 'update')->name('subcategory.update');
        Route::delete('/destroy/{id}', 'destroy')->name('subcategory.destroy');
    });

    Route::controller(PackageContentController::class)->prefix('PackageContent')->group(function () {
        Route::get('/', 'index')->name('package.content.index');
        Route::post('/store', 'store')->name('package.content.store');
        Route::get('/create', 'create')->name('package.content.create');
        Route::get('/edit/{id}', 'edit')->name('package.content.edit');
        Route::post('/update/{id}', 'update')->name('package.content.update');
        Route::delete('/destroy/{id}', 'destroy')->name('package.content.destroy');
    });

    Route::controller(ItineraryController::class)->prefix('itineraries')->group(function () {
        Route::get('/', 'index')->name('itineraries.index');
        Route::post('/store', 'store')->name('itineraries.store');
        Route::get('/create', 'create')->name('itineraries.create');
        Route::get('/edit/{id}', 'edit')->name('itineraries.edit');
        Route::post('/update/{id}', 'update')->name('itineraries.update');
        Route::delete('/destroy/{id}', 'destroy')->name('itineraries.destroy');
    });

    Route::controller(AccommodationController::class)->prefix('accommodations')->group(function () {
        Route::get('/', 'index')->name('accommodations.index');
        Route::post('/store', 'store')->name('accommodations.store');
        Route::get('/create', 'create')->name('accommodations.create');
        Route::get('/edit/{id}', 'edit')->name('accommodations.edit');
        Route::post('/update/{id}', 'update')->name('accommodations.update');
        Route::delete('/destroy/{id}', 'destroy')->name('accommodations.destroy');
    });

    Route::controller(AddonsController::class)->prefix('addons')->group(function () {
        Route::get('/', 'index')->name('addons.index');
        Route::post('/store', 'store')->name('addons.store');
        Route::get('/create', 'create')->name('addons.create');
        Route::get('/edit/{id}', 'edit')->name('addons.edit');
        Route::post('/update/{id}', 'update')->name('addons.update');
        Route::delete('/destroy/{id}', 'destroy')->name('addons.destroy');
    });

    Route::controller(ProgramsController::class)->prefix('programs')->group(function () {
        Route::get('/', 'index')->name('programs.index');
        Route::post('/store', 'store')->name('programs.store');
        Route::get('/create', 'create')->name('programs.create');
        Route::get('/show/{id}', 'show')->name('programs.show');
        Route::get('/booking/{id}', 'booking')->name('programs.booking');
        Route::delete('/booking/delete/{id}', 'bookingDelete')->name('programs.booking.delete');
        Route::get('/edit/{id}', 'edit')->name('programs.edit');
        Route::post('/update/{id}', 'update')->name('programs.update');
        Route::delete('/destroy/{id}', 'destroy')->name('programs.destroy');
    });

    Route::controller(BlogController::class)->prefix('blogs')->group(function () {
        Route::get('/', 'index')->name('blogs.index');
        Route::post('/store', 'store')->name('blogs.store');
        Route::get('/create', 'create')->name('blogs.create');
        Route::get('/edit/{id}', 'edit')->name('blogs.edit');
        Route::post('/update/{id}', 'update')->name('blogs.update');
        Route::delete('/destroy/{id}', 'destroy')->name('blogs.destroy');
    });

    Route::controller(MediaController::class)->prefix('media')->group(function () {
        Route::get('/program', 'indexProgram')->name('media.program');
        Route::post('/store', 'storeProgramMedia')->name('media.program.store');
        Route::delete('/destroy/{id}', 'destroy')->name('media.destroy');
    });

    Route::controller(FAQsController::class)->prefix('faqs')->group(function () {
        Route::get('/', 'index')->name('faqs.index');
        Route::post('/store', 'store')->name('faqs.store');
        Route::get('/create', 'create')->name('faqs.create');
        Route::get('/edit/{id}', 'edit')->name('faqs.edit');
        Route::post('/update/{id}', 'update')->name('faqs.update');
        Route::delete('/destroy/{id}', 'destroy')->name('faqs.destroy');
    });

    Route::controller(PromoReferralController::class)->prefix('promo_referral')->group(function () {
        Route::get('/', 'index')->name('promo.index');
        Route::post('/store', 'store')->name('promo.store');
        Route::delete('/destroy/{id}', 'destroy')->name('promo.destroy');
    });

    Route::controller(MessagesController::class)->prefix('messages')->group(function () {
        Route::get('/', 'index')->name('messages.index');
        Route::delete('/destroy/{id}', 'destroy')->name('messages.destroy');
    });


    Route::controller(TailorMadeController::class)->prefix('tailor-made-requests')->group(function () {
        Route::get('/', 'index')->name('tailors.index');
        Route::get('/{id}', 'show')->name('tailors.show');
        Route::delete('/destroy/{id}', 'destroy')->name('tailors.destroy');
    });

    Route::controller(ContactContoller::class)->prefix('contacts')->group(function () {
        Route::get('/', 'index')->name('contacts.index');
        Route::post('/update/{id}', 'update')->name('contacts.update');
        Route::get('/edit/{id}', 'edit')->name('contacts.edit');
    });

    Route::controller(SliderController::class)->prefix('sliders')->group(function () {
        Route::get('/', 'index')->name('sliders.index');        // List all sliders
        Route::get('/create', 'create')->name('sliders.create'); // Show the form to create a new slider
        Route::post('/', 'store')->name('sliders.store');        // Store a new slider
        Route::get('{slider}/edit', 'edit')->name('sliders.edit'); // Show the form to edit an existing slider
        Route::put('{slider}', 'update')->name('sliders.update'); // Update an existing slider
        Route::delete('/{slider}', 'destroy')->name('sliders.destroy');
    });
});

Auth::routes();
