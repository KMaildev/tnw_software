<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\WebAuthnRegisterController;
use App\Http\Controllers\Auth\WebAuthnLoginController;



Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register' => false]);
Route::get('/login-option', 'Auth\LoginController@loginOption')->name("login-option");
// FingerPrint 
Route::post('webauthn/register/options', [WebAuthnRegisterController::class, 'options'])
    ->name('webauthn.register.options');
Route::post('webauthn/register', [WebAuthnRegisterController::class, 'register'])
    ->name('webauthn.register');

Route::post('webauthn/login/options', [WebAuthnLoginController::class, 'options'])
    ->name('webauthn.login.options');
Route::post('webauthn/login', [WebAuthnLoginController::class, 'login'])
    ->name('webauthn.login');

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
    Route::post('marketing_team_import', 'Marketing\MarketingTeamController@marketing_team_import')->name('marketing_team_import');

    Route::resource('reject', 'Marketing\RejectController');
    Route::resource('follow_up', 'Marketing\FollowUpController');
    Route::get('follow_up_now/{id}', [
        'as' => 'follow_up_now',
        'uses' => 'Marketing\FollowUpController@follow_up_now'
    ]);
    Route::resource('marketing_report', 'Marketing\MarketingReportController');
    Route::resource('oncall_report', 'Marketing\OncallReportController');

    Route::resource('marketing_file', 'Marketing\MarketingFileController');
    Route::get('marketing_file_create/{id}', [
        'as' => 'marketing_file_create.create',
        'uses' => 'Marketing\MarketingFileController@create'
    ]);

    Route::resource('interest_rate', 'Marketing\InterestRateController');
    Route::resource('region', 'Property\RegionController');
    Route::resource('township', 'Property\TownshipController');
    Route::resource('ward', 'Property\WardController');
    Route::get('ward_list_ajax', 'Property\WardController@ward_list_ajax');
    Route::resource('property_type', 'Property\PropertyTypeController');
    Route::resource('activity', 'Activity\ActivityLogController');

    Route::resource('profile', 'ProfileController');
    Route::get('profile/biometric-data', 'ProfileController@biometricData');
    // Route::get('profile/biometric-del/{id}', 'ProfileController@biometricDataDestroy');

    Route::get('biometric_del/{id}', [
        'as' => 'biometric_del',
        'uses' => 'ProfileController@biometricDataDestroy'
    ]);


    Route::resource('lawyer', 'LawyerController');
});
