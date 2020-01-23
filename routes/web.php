<?php
session_start();

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
//maged
Route::post('/columns', 'OwnerPlantController@columns');

Route::get('/usersList', 'SuperAdminController@viewAllUsers');
Route::post('/updateUserType/{id}', 'SuperAdminController@updateUserType');

Route::resource('super', 'SuperAdminController');
Route::resource('supervisor', 'SupperViserController');
Route::resource('stuff', 'StuffController');
Route::resource('entryType', 'EntrytypeController');
Route::resource('equipmentType', 'EquipmentTypeController');

Route::resource('owner', 'OwnerController');

Route::resource('page', 'PageController');
Route::resource('homepage', 'HomePageController');

Route::get('/ownerPlants', 'OwnerPlantController@index');
Route::get('/ownerPlants/{owner}/plants', 'OwnerPlantController@getPlantsOfUser');
Route::get('/ownerplantReport/{owner}/{plant}', 'OwnerPlantController@ownerplantReport')->name('ownerplantreport');
Route::get('/ownerplantAllReports/{owner}/{plant}', 'OwnerPlantController@ownerplantAllReports');

//office
Route::get('/addOffice', 'OfficeController@add');
Route::post('/storeOffice', 'OfficeController@store');
Route::get('/office', 'OfficeController@get');
Route::get('/editOffice/{id}', 'OfficeController@edit');
Route::post('/updateOffice/{id}', 'OfficeController@update');
Route::post('/deleteOffice/{id}', 'OfficeController@delete');

//equipment
Route::get('/addEquipment', 'EquipmentController@create');
Route::get('/getPlants/{id}', 'EquipmentController@getPlants');
Route::get('/details/{id}', 'EquipmentController@details');

Route::post('/storeEquipment', 'EquipmentController@store');
Route::get('/equipment', 'EquipmentController@index');
Route::get('/editEquipment/{id}', 'EquipmentController@edit');
Route::post('/updateEquipment/{id}', 'EquipmentController@update');
Route::delete('/deleteEquipment/{id}', 'EquipmentController@destroy');

//jobs
Route::get('/addJob', 'JobsController@create');
Route::post('/storeJob', 'OwnerPlantController@job');
Route::get('/jobs', 'JobsController@index');
Route::get('/jobDetails/{id}', 'JobsController@details');
Route::get('/jobInfo/{id}', 'JobsController@info');
Route::get('/editJob/{id}', 'JobsController@edit');
Route::post('/updateJob/{id}', 'JobsController@update');
Route::get('/editJobInfo/{id}', 'JobsController@editJobInfo');

Route::delete('/deleteJob/{id}', 'JobsController@destroy');
Route::delete('/deleteJobInfo/{id}', 'JobsController@destroyJobInfo');

Route::get('/getEquipment/{id}', 'JobsController@getEquipment');
Route::get('/getParts/{id}', 'JobsController@getParts');

//plants
Route::get('/addPlant/{id}', 'PlantsController@create');
Route::post('/storePlant', 'PlantsController@store');
Route::get('/plants/{id}', 'PlantsController@index');
Route::get('/editPlant/{id}', 'PlantsController@edit');
Route::post('/updatePlant/{id}', 'PlantsController@update');
Route::delete('/deletePlant/{id}', 'PlantsController@destroy');

Route::get('/editPlantData/{id}', 'OwnerPlantController@edit');
Route::post('/storePlantData/{id}', 'OwnerPlantController@update');

Route::get('/editOwnerData/{id}', 'OwnerPlantController@editOwner');
Route::post('/storeOwnerData/{id}', 'OwnerPlantController@updateOwner');
Route::post('/ownerplant', 'OwnerPlantController@store');

//parts
Route::get('/addPart/{id}', 'PartsController@create');
Route::post('/storePart', 'PartsController@store');
Route::get('/parts/{id}', 'PartsController@index');
Route::get('/editPart/{id}', 'PartsController@edit');
Route::post('/updatePart/{id}', 'PartsController@update');
Route::delete('/deletePart/{id}', 'PartsController@destroy');

Route::get('/createArticle/{id}', 'PageController@createArticle');
Route::post('/createArticle', 'PageController@storeArticle')->name('article.store');
Route::get('/viewArticles/{id}', 'PageController@viewArticles');
Route::post('/deleteArticle/{id}', 'PageController@destroyArticle')->name('article.destroy');
Route::get('/editArticles/{id}', 'PageController@editArticles')->name('article.edit');
Route::post('/updateArticle/{id}', 'PageController@updateArticle')->name('article.update');
Route::get('/createGallery/{id}', 'PageController@createGallery');
Route::post('/createGallery', 'PageController@storeGallery')->name('gallery.store');
Route::get('/home', 'PageController@home');
Route::get('/home_ar', 'PageController@home_ar');
Route::get('/page/{id}', 'PageController@show');
Route::get('/page_ar/{id}', 'PageController@show_ar');
Route::get('/article/{id}', 'PageController@showarticle');
Route::get('/article_ar/{id}', 'PageController@showarticle_ar');

Route::resource('menu', 'MenuController');
Route::resource('branch', 'BranchController');
Route::resource('admins', 'UserController');

Route::post('/mega', 'PageController@mega');

Route::resource('press', 'PressController');
Route::resource('client', 'ClientController');
Route::get('/about_us', 'PageController@about_us');
Route::get('/about_us_ar', 'PageController@about_us_ar');
Route::get('/contact_us', 'PageController@contact_us');
Route::get('/contact_us_ar', 'PageController@contact_us_ar');
Route::post('/contact_us', 'ContactUsController@contact_us');
Route::post('/contact_us_ar', 'ContactUsController@contact_us_ar');
Route::post('/login', 'PageController@login')->name('login');
Route::get('/', 'UserController@log');

Route::get('/logout', 'PageController@logout')->name('logout');
Route::get('/admin', 'PageController@admin');
Route::post('/profile', 'PageController@profile')->name('profile');
Route::get('/profile', 'PageController@profile')->name('profile');
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/storeNewEquipemtn', 'EquipmentController@storeNewEquipemtn');

Route::post('/email', 'ContactUsController@update')->name('email');
Route::get('/email', 'ContactUsController@index')->name('email');
Route::get('/create', function () {
    return view('equipment.createnew');
});

Route::post('/partStatus', 'OwnerPlantController@partStatus');
Route::get('/createnew', 'EquipmentController@createnew');
Route::get('/cancel', 'EquipmentController@cancel');
Route::post('/storePartData', 'OwnerPlantController@storePartData');
Route::post('/storeDouble', 'OwnerPlantController@storeDouble');
Route::get('/updateJob', 'OwnerPlantController@updateJob');

Route::post('/updateEquipmentOwner/{id}', 'OwnerPlantController@updateEquipmentOwner');