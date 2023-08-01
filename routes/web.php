<?php

use App\Http\Controllers\AmenitiesController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertyTypeController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Vistas usuario sin loguearse

Route::controller(FrontendController::class)->group(function () {

    Route::get('/', 'index')->name('index');

    Route::get('/user/signin', 'userSignin')->name('user.signin');

});

Route::controller(PropertyController::class)->group(function () {

    Route::get('/properties/all/{filter}', 'propertiesFilter')->name('front.properties.index');
    Route::get('/properties/inner/{id}', 'inner')->name('front.properties.inner');

});

// Vistas usuario admin y agente

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'CheckRoles:admin,agent'])->name('dashboard');

// Vistas usuario cualquier rol

Route::middleware(['auth','verified'])->group(function () {

    Route::get('/userProfile', [ProfileController::class, 'userEdit'])->name('userProfile.edit');
    Route::get('/userProfile/password', [ProfileController::class, 'userEditPassword'])->name('userProfile.editPassword');
    Route::get('/userProfile/image', [ProfileController::class, 'imageUpdatePage'])->name('userProfile.editImage');
    Route::patch('/profile/image', [ProfileController::class, 'imageUpdate'])->name('profile.imageupdate');


});

// Vistas usuario solo admin

Route::middleware(['auth','verified', 'CheckRoles:admin'])->group(function () {

    Route::get('/admin/TypesProperties/all', [PropertyTypeController::class, 'index'])->name('admin.TypesProperties.index');
    Route::get('/admin/TypesProperties/register', [PropertyTypeController::class, 'create'])->name('admin.TypesProperties.register');
    Route::post('/admin/TypesProperties/register', [PropertyTypeController::class, 'store']);
    Route::get('/admin/TypesProperties/edit/{id}', [PropertyTypeController::class, 'EditView'])->name('admin.TypesProperties.edit');
    Route::post('/admin/TypesProperties/edit', [PropertyTypeController::class, 'Edit'])->name('admin.TypesProperties.edit.info');
    Route::get('/admin/TypesProperties/delete', [PropertyTypeController::class, 'destroy'])->name('admin.TypesProperties.delete');


    Route::get('/admin/Amenities/all', [AmenitiesController::class, 'index'])->name('admin.Amenities.index');
    Route::get('/admin/Amenities/register', [AmenitiesController::class, 'create'])->name('admin.Amenities.register');
    Route::post('/admin/Amenities/register', [AmenitiesController::class, 'store']);
    Route::get('/admin/Amenities/edit/{id}', [AmenitiesController::class, 'EditView'])->name('admin.Amenities.edit');
    Route::post('/admin/Amenities/edit', [AmenitiesController::class, 'Edit'])->name('admin.Amenities.edit.info');
    Route::get('/admin/Amenities/delete', [AmenitiesController::class, 'destroy'])->name('admin.Amenities.delete');


    Route::get('/admin/Facilities/all', [FacilityController::class, 'index'])->name('admin.Facilities.index');
    Route::get('/admin/Facilities/register', [FacilityController::class, 'create'])->name('admin.Facilities.register');
    Route::post('/admin/Facilities/register', [FacilityController::class, 'store']);
    Route::get('/admin/Facilities/edit/{id}', [FacilityController::class, 'EditView'])->name('admin.Facilities.edit');
    Route::post('/admin/Facilities/edit', [FacilityController::class, 'Edit'])->name('admin.Facilities.edit.info');
    Route::get('/admin/Facilities/delete', [FacilityController::class, 'destroy'])->name('admin.Facilities.delete');


    Route::get('/admin/users/all', [UsersController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/register', [UsersController::class, 'create'])->name('admin.users.register');
    Route::post('/admin/users/register', [UsersController::class, 'store']);
    Route::get('/admin/users/edit/{id}', [UsersController::class, 'EditView'])->name('admin.users.edit');
    Route::post('/admin/users/edit', [UsersController::class, 'Edit'])->name('admin.users.edit.info');
    Route::get('/admin/users/delete', [UsersController::class, 'destroy'])->name('admin.users.delete');

});

Route::middleware(['auth','verified', 'CheckRoles:admin,agent'])->group(function () {

    Route::get('admin/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::patch('admin/profile/image', [ProfileController::class, 'imageUpdate'])->name('admin.profile.imageUpdate');
    Route::delete('admin/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');


    Route::get('/admin/properties/all', [PropertyController::class, 'index'])->name('admin.properties.index');
    Route::get('/admin/properties/register', [PropertyController::class, 'create'])->name('admin.properties.register');
    Route::post('/admin/properties/register', [PropertyController::class, 'store']);
    Route::get('/admin/properties/edit/{id}', [PropertyController::class, 'EditView'])->name('admin.properties.edit');
    Route::post('/admin/properties/edit', [PropertyController::class, 'Edit'])->name('admin.properties.edit.info');
    Route::post('/admin/properties/edit/principalImage', [PropertyController::class, 'EditPrincipalImage'])->name('admin.properties.edit.principalImage');
    Route::post('/admin/properties/delete/image', [PropertyController::class, 'deleteImage'])->name('admin.properties.delete.image');
    Route::post('/admin/properties/add/images', [PropertyController::class, 'addImages'])->name('admin.properties.add.images');
    Route::post('/admin/properties/add/facility', [PropertyController::class, 'addFacility'])->name('admin.properties.add.facility');
    Route::post('/admin/properties/delete/facility', [PropertyController::class, 'deleteFacility'])->name('admin.properties.delete.facility');
    Route::post('/admin/properties/edit/amenities', [PropertyController::class, 'editAmenities'])->name('admin.properties.edit.amenities');
    Route::get('/admin/properties/delete', [PropertyController::class, 'destroy'])->name('admin.properties.delete');

});



require __DIR__.'/auth.php';
