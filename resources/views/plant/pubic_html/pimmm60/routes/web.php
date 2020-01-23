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


Route::resource('super','SuperAdminController');
Route::resource('supervisor','SupperViserController');
Route::resource('stuff','StuffController');
Route::resource('entryType','EntrytypeController');
Route::resource('equipmentType','EquipmentTypeController');

Route::resource('owner','OwnerController');

Route::resource('page','PageController');
Route::resource('homepage','HomePageController');

//office
Route::get('/addOffice','OfficeController@add');
Route::post('/storeOffice','OfficeController@store');
Route::get('/office','OfficeController@get');
Route::get('/editOffice/{id}','OfficeController@edit');
Route::post('/updateOffice/{id}','OfficeController@update');
Route::get('/deleteOffice/{id}','OfficeController@delete');

//plants
Route::get('/addPlant/{id}','PlantsController@create');
Route::post('/storePlant/{id}','PlantsController@store');
Route::get('/plants/{id}','PlantsController@index');
Route::get('/editPlant/{id}','PlantsController@edit');
Route::post('/updatePlant/{id}','PlantsController@update');
Route::post('/deletePlant/{id}','PlantsController@destroy');

Route::get('/createArticle/{id}','PageController@createArticle');
Route::post('/createArticle','PageController@storeArticle')->name('article.store');
Route::get('/viewArticles/{id}','PageController@viewArticles');
Route::post('/deleteArticle/{id}','PageController@destroyArticle')->name('article.destroy');
Route::get('/editArticles/{id}','PageController@editArticles')->name('article.edit');
Route::post('/updateArticle/{id}','PageController@updateArticle')->name('article.update');
Route::get('/createGallery/{id}','PageController@createGallery');
Route::post('/createGallery','PageController@storeGallery')->name('gallery.store');
Route::get('/home','PageController@home');
Route::get('/home_ar','PageController@home_ar');
Route::get('/page/{id}','PageController@show');
Route::get('/page_ar/{id}','PageController@show_ar');
Route::get('/article/{id}','PageController@showarticle');
Route::get('/article_ar/{id}','PageController@showarticle_ar');

Route::resource('menu','MenuController');
Route::resource('branch','BranchController');
Route::resource('admins','UserController');

Route::post('/mega','PageController@mega');

Route::resource('press','PressController');
Route::resource('client','ClientController');
Route::get('/about_us','PageController@about_us');
Route::get('/about_us_ar','PageController@about_us_ar');
Route::get('/contact_us','PageController@contact_us');
Route::get('/contact_us_ar','PageController@contact_us_ar');
Route::post('/contact_us','ContactUsController@contact_us');
Route::post('/contact_us_ar','ContactUsController@contact_us_ar');
Route::post('/login','PageController@login')->name('login');
Route::get('/logout','PageController@logout')->name('logout');
Route::get('/admin','PageController@admin');
Route::post('/profile','PageController@profile')->name('profile');
Route::get('/profile','PageController@profile')->name('profile');
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/email','ContactUsController@update')->name('email');
Route::get('/email','ContactUsController@index')->name('email');
