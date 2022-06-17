<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::view('/file_manager', 'file_manager.index')->name('file_manager.index');
    Route::resource('hr_dahsboard', 'Hr\HrDashboardController');

    Route::resource('employee', 'Hr\EmployeeController');
    Route::resource('department', 'Hr\DepartmentController');
    Route::resource('role', 'Hr\RoleController');
    Route::resource('permission', 'Hr\PermissionController');


    Route::resource('marketing_dahsboard', 'Marketing\MarketingDashboard');

    Route::resource('marketing_team', 'Marketing\MarketingTeamController');
    Route::get('already_live_filter_search', 'Marketing\MarketingTeamController@already_live_filter_search');

    Route::resource('interest_rate', 'Marketing\InterestRateController');

    Route::resource('region', 'Property\RegionController');
    Route::resource('township', 'Property\TownshipController');
    Route::resource('property_type', 'Property\PropertyTypeController');
});
