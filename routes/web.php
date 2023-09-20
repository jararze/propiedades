<?php

use App\Http\Controllers\AmenitiesController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\PackagePlanController;
use App\Http\Controllers\PotencialBuyerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertyMessageController;
use App\Http\Controllers\PropertyTypeController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WishlistController;
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
//Route::get('/prueba', function () {
//    return view('project.index');
//});

Route::get('/show-map', [MapController::class, 'index'] );
// Vistas usuario sin loguearse

Route::controller(FrontendController::class)->group(function () {

    Route::get('/', 'index')->name('index');

    Route::get('/about', 'about')->name('about');

    Route::get('/contact', 'contact')->name('contact');

    Route::get('/user/signin', 'userSignin')->name('user.signin');

});

Route::controller(PropertyController::class)->group(function () {

    Route::get('/properties/all/{filter}', 'propertiesFilter')->name('front.properties.index');
    Route::get('/properties/filter/', 'propertiesSearchFilter')->name('front.properties.filter');
    Route::get('/properties/inner/{id}', 'inner')->name('front.properties.inner');

});

Route::controller(ProjectController::class)->group(function () {

    Route::get('/projects/all/', 'propertiesFilter')->name('front.project.index');
    Route::get('/projects/inner/{id}', 'inner')->name('front.project.inner');

});


Route::controller(PropertyMessageController::class)->group(function () {

    Route::post('/properties/message/send', 'send_message')->name('front.properties.message');
    Route::post('/user/validate/phone/show', [PropertyMessageController::class, 'validatePhone'])->name('user.validate.phone.show');

});



// Vistas usuario admin y agente

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'CheckRoles:admin,agent'])->name('dashboard');

// Vistas usuario cualquier rol

Route::middleware(['auth','verified'])->group(function () {

    Route::get('/userProfile', [ProfileController::class, 'userEdit'])->name('userProfile.edit');
    Route::patch('/userProfile/update', [ProfileController::class, 'update'])->name('userProfile.update');
    Route::get('/userProfile/password', [ProfileController::class, 'userEditPassword'])->name('userProfile.editPassword');
    Route::get('/userProfile/image', [ProfileController::class, 'imageUpdatePage'])->name('userProfile.editImage');
    Route::patch('/profile/image', [ProfileController::class, 'imageUpdate'])->name('profile.imageupdate');
    Route::get('/userProfile/wishlist/index', [WishlistController::class, 'index'])->name('userProfile.wishlist.index');
    Route::delete('/userProfile/wishlist/delete/{id}', [WishlistController::class, 'delete'])->name('userProfile.wishlist.delete');
    Route::get('/userProfile/compare/index', [CompareController::class, 'index'])->name('userProfile.compare.index');
    Route::delete('/userProfile/compare/delete/{id}', [CompareController::class, 'delete'])->name('userProfile.compare.delete');


    Route::post('/user/wishlist/add', [WishlistController::class, 'store'])->name('user.wishlist.add');
    Route::post('/user/compare/add', [CompareController::class, 'store'])->name('user.compare.add');


});

// Vistas usuario solo admin

Route::middleware(['auth','verified', 'CheckRoles:admin'])->group(function () {


    Route::get('admin/configuration/index', [ConfigurationController::class, 'index'])->name('admin.configuration.index');
    Route::post('admin/configuration/update', [ConfigurationController::class, 'update'])->name('admin.configuration.update');

    Route::get('admin/configuration/index/menu', [ConfigurationController::class, 'indexMenu'])->name('admin.configuration.index.menu');
    Route::post('admin/configuration/update/menu', [ConfigurationController::class, 'updateMenu'])->name('admin.configuration.update.menu');

    Route::get('admin/configuration/video/index', [ConfigurationController::class, 'indexVideo'])->name('admin.configuration.video.index');
    Route::post('admin/configuration/video/update', [ConfigurationController::class, 'updateVideo'])->name('admin.configuration.video.update');

    Route::get('admin/configuration/reasons/index', [ConfigurationController::class, 'indexReasons'])->name('admin.configuration.reasons.index');
    Route::post('admin/configuration/reasons/update', [ConfigurationController::class, 'updateReasons'])->name('admin.configuration.reasons.update');

    Route::get('admin/configuration/advertising/index', [ConfigurationController::class, 'indexAdvertising'])->name('admin.configuration.advertising.index');
    Route::post('admin/configuration/advertising/update', [ConfigurationController::class, 'updateAdvertising'])->name('admin.configuration.advertising.update');


    Route::get('/admin/testimonies/all', [TestimonyController::class, 'index'])->name('admin.testimonies.index');
    Route::get('/admin/testimonies/register', [TestimonyController::class, 'create'])->name('admin.testimonies.register');
    Route::post('/admin/testimonies/register', [TestimonyController::class, 'store']);
    Route::get('/admin/testimonies/edit/{id}', [TestimonyController::class, 'edit'])->name('admin.testimonies.edit');
    Route::post('/admin/testimonies/edit', [TestimonyController::class, 'update'])->name('admin.testimonies.edit.info');
    Route::get('/admin/testimonies/delete', [TestimonyController::class, 'destroy'])->name('admin.testimonies.delete');


    Route::get('/admin/cities/all', [CityController::class, 'index'])->name('admin.cities.index');
    Route::get('/admin/cities/register', [CityController::class, 'create'])->name('admin.cities.register');
    Route::post('/admin/cities/register', [CityController::class, 'store']);
    Route::get('/admin/cities/edit/{id}', [CityController::class, 'edit'])->name('admin.cities.edit');
    Route::post('/admin/cities/edit', [CityController::class, 'update'])->name('admin.cities.edit.info');
    Route::get('/admin/cities/delete', [CityController::class, 'destroy'])->name('admin.cities.delete');


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

    Route::get('/admin/packages/all', [PackagePlanController::class, 'index'])->name('admin.packages.index');
    Route::get('/admin/packages/register', [PackagePlanController::class, 'create'])->name('admin.packages.register');
    Route::post('/admin/packages/register', [PackagePlanController::class, 'store']);
    Route::get('/admin/packages/edit/{id}', [PackagePlanController::class, 'EditView'])->name('admin.packages.edit');
    Route::post('/admin/packages/edit', [PackagePlanController::class, 'Edit'])->name('admin.packages.edit.info');
    Route::get('/admin/packages/delete', [PackagePlanController::class, 'destroy'])->name('admin.packages.delete');
    Route::get('/admin/packages/users/approval', [PackagePlanController::class, 'indexApproval'])->name('admin.packages.users.approval');
    Route::get('/admin/packages/users/activate/{id}', [PackagePlanController::class, 'activate'])->name('admin.packages.activate');
    Route::get('/admin/packages/users/edit/{id}', [PackagePlanController::class, 'EditPackageView'])->name('admin.packages.users.edit');
    Route::post('/admin/packages/users/edit/info', [PackagePlanController::class, 'EditPackage'])->name('admin.packages.users.edit.info');

    Route::get('admin/posible/users/index', [PotencialBuyerController::class, 'index'])->name('admin.possible.users.index');

    Route::get('/admin/properties/inactives', [PropertyController::class, 'inactives'])->name('admin.properties.inactives');
    Route::post('/admin/properties/activate', [PropertyController::class, 'activate'])->name('admin.properties.activate');
    Route::get('/admin/properties/delete', [PropertyController::class, 'destroy'])->name('admin.properties.delete');
    Route::get('/admin/properties/sale', [PropertyController::class, 'sale'])->name('admin.properties.sale');
    Route::post('/admin/properties/sold/status', [PropertyController::class, 'propertieChangeStatus'])->name('admin.properties.sold.status');

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

    Route::get('/admin/properties/own', [PropertyController::class, 'own'])->name('admin.properties.own');
    Route::get('/admin/properties/sold', [PropertyController::class, 'sold'])->name('admin.properties.sold');





    Route::get('/admin/project/all', [ProjectController::class, 'index'])->name('admin.project.index');
    Route::get('/admin/project/register', [ProjectController::class, 'create'])->name('admin.project.register');
    Route::post('/admin/project/register', [ProjectController::class, 'store']);
    Route::get('/admin/project/edit/{id}', [ProjectController::class, 'EditView'])->name('admin.project.edit');
    Route::post('/admin/project/edit', [ProjectController::class, 'Edit'])->name('admin.project.edit.info');
    Route::post('/admin/project/edit/principalImage', [ProjectController::class, 'EditPrincipalImage'])->name('admin.project.edit.principalImage');
    Route::post('/admin/project/delete/image', [ProjectController::class, 'deleteImage'])->name('admin.project.delete.image');
    Route::post('/admin/project/add/images', [ProjectController::class, 'addImages'])->name('admin.project.add.images');
    Route::post('/admin/project/add/facility', [ProjectController::class, 'addFacility'])->name('admin.project.add.facility');
    Route::post('/admin/project/delete/facility', [ProjectController::class, 'deleteFacility'])->name('admin.project.delete.facility');
    Route::post('/admin/project/edit/amenities', [ProjectController::class, 'editAmenities'])->name('admin.project.edit.amenities');
    Route::get('/admin/project/delete', [ProjectController::class, 'destroy'])->name('admin.project.delete');






});


Route::middleware(['auth','verified', 'CheckRoles:agent'])->group(function () {

    Route::get('/admin/packages/select', [PackagePlanController::class, 'choose'])->name('admin.packages.select');
    Route::post('/admin/packages/user/add', [PackagePlanController::class, 'addUser'])->name('admin.packages.user.add');


});



require __DIR__.'/auth.php';
