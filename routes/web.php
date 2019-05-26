<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');

// User Routes
Route::group(['namespace'=>'User'],function(){

    // about route
    Route::get('user/about', 'PagesController@about')->name('about');
    
    // service route
    Route::get('user/service', 'PagesController@service')->name('service');
    
    // contact route
    Route::resource('user/contact','ContactController');
});

// Admin Routes
Route::group(['namespace'=>'Admin'],function(){
    
    // home route
    Route::get('admin/home', 'HomeController@index')->name('home');

    // employee route
    Route::resource('admin/employee','EmployeeController');
    
    // equipment route
    Route::resource('admin/equipment','EquipmentController');
    
    // pesticide route
    Route::resource('admin/pesticide','PesticideController');
    
    // insecticide route
    Route::resource('admin/insecticide','InsecticideController');
    
    // fertilizer route
    Route::resource('admin/fertilizer','FertilizerController');
    
    // crop route
    Route::resource('admin/crop','CropController');
    
    // expense route
    Route::resource('admin/expense','ExpenseController');
    
    // category route
    Route::resource('admin/category','CategoryController');
    
    // event route
    Route::resource('admin/event','EventController');
    
    // permission route
    Route::resource('admin/permission','PermissionController');
    
    // role route
    Route::resource('admin/role','RoleController');
    
    // user route
    Route::resource('admin/user','UserController');
    
    // message route
    Route::resource('admin/message','MessageController');
    
    // planting report route
    Route::get('admin/plantingReport','ReportController@plantingReport')->name('plantingReport');

    Route::post('admin/searchPlantingReport','ReportController@searchPlantingReport')->name('searchPlantingReport');
    
    // harvesting report route
    Route::get('admin/harvestingReport','ReportController@harvestingReport')->name('harvestingReport');

    Route::post('admin/searchHarvestingReport','ReportController@searchHarvestingReport')->name('searchHarvestingReport');
    
});