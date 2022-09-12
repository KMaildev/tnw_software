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
    Route::post('employeesortable', 'Hr\EmployeeController@employeeSortable');

    Route::resource('department', 'Hr\DepartmentController');
    Route::resource('role', 'Hr\RoleController');
    Route::resource('permission', 'Hr\PermissionController');

    Route::resource('marketing_dahsboard', 'Marketing\MarketingDashboard');

    // Marketing 
    Route::resource('marketing_team', 'Marketing\MarketingTeamController');
    Route::get('marketing_team_ajax', [
        'as' => 'marketing_team_ajax',
        'uses' => 'Marketing\MarketingTeamController@ajax_index'
    ]);

    Route::get('create_viewed_property_ajax', [
        'as' => 'create_viewed_property_ajax',
        'uses' => 'Marketing\MarketingTeamController@create_viewed_property_ajax'
    ]);

    Route::get('already_live_filter_search', 'Marketing\MarketingTeamController@already_live_filter_search');
    Route::post('marketing_team_import', 'Marketing\MarketingTeamController@marketing_team_import')->name('marketing_team_import');
    Route::get('marketing_team_export', 'Marketing\MarketingTeamController@marketing_team_export')->name('marketing_team_export');
    Route::get('marketing_team_details_export/{id}', [
        'as' => 'marketing_team_details_export',
        'uses' => 'Marketing\MarketingTeamController@marketing_team_details_export'
    ]);

    Route::get('get_phone_number/{id}', [
        'as' => 'get_phone_number',
        'uses' => 'Marketing\MarketingTeamController@get_phone_number'
    ]);
    // Marketing 

    Route::resource('marketing_file', 'Marketing\MarketingFileController');
    Route::get('marketing_file_create/{id}', [
        'as' => 'marketing_file_create.create',
        'uses' => 'Marketing\MarketingFileController@create'
    ]);


    Route::resource('reject', 'Marketing\RejectController');
    Route::get('reject_ajax', [
        'as' => 'reject_ajax',
        'uses' => 'Marketing\RejectController@ajax_index'
    ]);


    Route::resource('follow_up', 'Marketing\FollowUpController');
    Route::get('follow_up_ajax', [
        'as' => 'follow_up_ajax',
        'uses' => 'Marketing\FollowUpController@follow_up_ajax'
    ]);
    Route::post('save_follow_up_appointment', [
        'as' => 'save_follow_up_appointment',
        'uses' => 'Marketing\FollowUpController@save_follow_up_appointment'
    ]);


    Route::resource('marketing_report', 'Marketing\MarketingReportController');
    Route::resource('oncall_report', 'Marketing\OncallReportController');

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

    Route::resource('visitor', 'Marketing\VisitorController');


    // Property Management
    Route::resource('lawyer', 'LawyerController');


    // Sales  Team
    Route::resource('sale_dashboard', 'Sale\SaleDashboardController');
    Route::resource('sale_appointment', 'Sale\SaleAppointmentController');
    Route::get('sale_appointment_ajax', [
        'as' => 'sale_appointment_ajax',
        'uses' => 'Sale\SaleAppointmentController@AjaxSaleAppointment'
    ]);
    Route::get('sale_rent_appointment_delete/{id}', [
        'as' => 'sale_rent_appointment_delete',
        'uses' => 'Sale\SaleAppointmentController@SaleRentAppointmentDelete'
    ]);


    Route::resource('rent_appointment', 'Sale\RentAppointmentController');
    Route::get('rent_appointment_ajax', [
        'as' => 'rent_appointment_ajax',
        'uses' => 'Sale\RentAppointmentController@AjaxRentAppointment'
    ]);


    Route::resource('sale_lists', 'Sale\SaleListsController');
    Route::resource('want_to_buy', 'Marketing\WantToBuyController');
    Route::get('get_want_to_buy_ajax', [
        'as' => 'get_want_to_buy_ajax',
        'uses' => 'Marketing\WantToBuyController@AjaxWantToBuy'
    ]);

    Route::resource('viewed_property', 'Marketing\ViewedPropertyController');
    Route::get('create_viewed_property/{id}', [
        'as' => 'create_viewed_property',
        'uses' => 'Marketing\ViewedPropertyController@CreateViewedProperty'
    ]);
    Route::post('save_viewed_property', [
        'as' => 'save_viewed_property',
        'uses' => 'Marketing\ViewedPropertyController@SaveViewedProperty'
    ]);

    Route::resource('on_call_report_list', 'Marketing\OncallReportListController');
    Route::get('on_call_report_list_ajax', [
        'as' => 'on_call_report_list_ajax',
        'uses' => 'Marketing\OncallReportListController@on_call_report_list_ajax'
    ]);
});
