<?php

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
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\VisitorsController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AmenitiesController;
use App\Http\Controllers\SecretoryController;
use App\Http\Controllers\SocietyController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\admcontroller;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PaymentController;




// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'welcome');
Auth::routes(['verify' => true]);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/login/watchman', [LoginController::class,'showWatchmanLoginForm']);

Route::get('/login/superadmin', [LoginController::class, 'showSuperadminLoginForm']);
Route::get('/login/secretary', [LoginController::class, 'showSecretaryLoginForm']);
Route::get('/login/treasurer', [LoginController::class, 'showTreasurerLoginForm']);

Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);
Route::get('/register/watchman', [RegisterController::class,'showWatchmanRegisterForm']);

// Route::get('/register/superadmin', [RegisterController::class,'showSuperadminRegisterForm']);
Route::get('/register/secretary', [RegisterController::class,'showSecretaryRegisterForm']);
Route::get('/register/treasurer', [RegisterController::class,'showTreasurerRegisterForm']);

Route::post('/login/admin', [LoginController::class,'adminLogin']);
Route::post('/login/watchman', [LoginController::class,'watchmanLogin']);

Route::post('/login/superadmin', [LoginController::class,'superadminLogin']);
Route::post('/login/secretary', [LoginController::class,'secretaryLogin']);
Route::post('/login/treasurer', [LoginController::class,'treasurerLogin']);

Route::post('/register/admin', [RegisterController::class,'createAdmin']);
Route::post('/register/watchman', [RegisterController::class,'createWatchman']);

Route::post('/register/superadmin', [RegisterController::class,'createSuperadmin']);
Route::post('/register/secretary', [RegisterController::class,'createSecretary']);
Route::post('/register/treasurer', [RegisterController::class,'createTreasurer']);

Route::group(['middleware' => 'auth:watchman'], function () {
    Route::view('/watchman', 'watchman');
    
    Route::view('/watchman-amenities', 'watchman-amenities');
    Route::view('/visitors_entryform', 'visitors/visitors_entryform');
    Route::view('/visitors_exitform', 'visitors/visitors_exitform');
    Route::view('/visitors_record', 'visitors/visitors_record');
    Route::view('/staffs_record', 'staff/staffs_record');

    Route::post('/visitorsform',[VisitorsController::class, 'AddVisitors']);
    
    Route::view('/testvisitors', 'visitors/testvisitors');
    // Route::get('testvisitors',[VisitorsController::class, 'ShowtestVisitors']);

    Route::get('visitors_record',[VisitorsController::class, 'ShowVisitors']);
    Route::get('staffs_record',[StaffController::class, 'ShowStaffs']);
    Route::get('/visitors_entryform', [VisitorsController::class, 'show_flatusername']);
    
    

    Route::view('/staff_register', 'staff/staff_register');
    Route::post('/staff_register',[StaffController::class, 'register']);
    Route::view('/staff_entryform', 'staff/staff_entryform');
    Route::post('/staff_entryform', [StaffController::class, 'Staff_attendance']);
    Route::view('/staffattendance', 'staff/staffattendance');
    Route::get('/staffattendance',[StaffController::class, 'showstaffattendance']);

    Route::view('/display-gym', 'watchman/display-gym');
    Route::get('/display-gym',[AmenitiesController::class, 'showgymforwatchman']);
    
    Route::get('edit/{id}',[VisitorsController::class, 'showData']);
    Route::post('edit',[VisitorsController::class, 'Update']);
    
    Route::view('staff_exit', 'staff/staff_exit');
    Route::get('staff_exit/{id}',[StaffController::class, 'showData']);
    Route::post('staff_exit',[StaffController::class, 'Update']);
    
    // Route::post('/visitorsform',[VisitorsController::class, 'show_flatusername']);
});

Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin/admin');
    Route::view('/usercomplaints', 'admin/usercomplaints');
    Route::view('/amenities', 'admin/amenities');

    Route::view('/view', 'admin/view');
    Route::get('/view/{id}',[ComplaintController::class, 'userdetails']);

    Route::view('/admin-maintenance', 'admin/admin-maintenance');
    Route::view('/all_amenity_bookings', 'admin/all_amenity_bookings');
    Route::view('/allnotices_admin', 'admin/allnotices_admin');

    Route::get('/admin', [VisitorsController::class, 'displayonadmin']);
    Route::post('/amenities',[AmenitiesController::class, 'RegisterAmenity']);
    Route::get('/amenities',[AmenitiesController::class, 'ShowAmenities']);
    
    Route::view('/flat_management', 'admin/flat_management');
    Route::view('/usercomplaints', 'admin/usercomplaints');
    Route::get('/usercomplaints',[ComplaintController::class, 'displayonadmin']);
    Route::view('/solve', 'solve');
    Route::get('solve/{id}',[ComplaintController::class, 'showData1']);
    Route::post('solve', [ComplaintController::class, 'update']);
    
    Route::view('/notice', 'admin/notice');
    Route::post('/notice', [NoticeController::class, 'addData']);
    Route::get('/notice_list', [NoticeController::class, 'show']);
    Route::get('/allnotices_admin', [NoticeController::class, 'displayallnoticestoadmin']);

    Route::get('/allmeetings_admin', [NoticeController::class, 'displayallmeetingstoadmin']);
    
    // Route::view('/create', 'document/create');
    Route::get('/files/create',[DocumentController::class, 'create']);
    Route::post('/files',[DocumentController::class, 'store']);

    Route::get('/flat_management',[SocietyController::class, 'display_flatinfo_toAdmin']);

    //flat management on admin login
    Route::get('/flat_management',[admcontroller::class, 'showflatinfotoadmin']);
    Route::get('delete/{id}',[admcontroller::class, 'delete']);
    Route::get('edit1/{id}',[admcontroller::class, 'showData']);
    Route::post('edit1',[admcontroller::class, 'update']);

    Route::post('admin-maintenance',[MaintenanceController::class, 'AddMaintenance']);
    Route::view('/allbills_admin', 'admin/allbills_admin');


    Route::get('admin-maintenance',[MaintenanceController::class, 'display_members']);




    

    // Route::get('/admin', [SocietyController::class, 'Show_SocietyName']);
});

Route::group(['middleware' => 'auth:superadmin'], function () {
    Route::view('/superadmin', 'superadmin/superadmin');
    Route::view('/registersociety', 'superadmin/registersociety');
    Route::post('/registersociety',[SocietyController::class, 'AddSociety']);
    Route::get('/registersociety',[SocietyController::class, 'display_registered_societies']);
    
    
});

Route::group(['middleware' => 'auth:secretary'], function () {
    Route::view('/secretary', 'secretary/secretary');
    Route::view('/secretary-notice', 'secretary/secretary-notice');
    Route::view('/schedule-meeting', 'secretary/schedule-meeting');
    Route::post('/secretary-notice',[NoticeController::class, 'addNotice']);
    Route::get('/secretary-notice',[NoticeController::class, 'displaytosecretarynotice']);
    Route::post('/schedule-meeting',[NoticeController::class, 'ScheduleMeeting']);
    Route::get('/schedule-meeting',[NoticeController::class, 'displaymeetingstosecretary']);
    
    
    
});

Route::group(['middleware' => 'auth:treasurer'], function () {
    Route::view('/treasurer', 'treasurer');
});

Route::get('logout', [LoginController::class,'logout']);

// for three welcome pages
Route::view('/security-management', 'welcome-pages/security-management');
 Route::view('/financial-management', 'welcome-pages/financial-management');
 Route::view('/community-management', 'welcome-pages/community-management');

 Route::get('/home', [VisitorsController::class, 'displayonhome']);
 
 
 Route::view('/amenity_bookings', 'amenity_bookings');
 
 Route::view('/display_booking_amenity', 'display_booking_amenity');
 Route::get('/amenity_bookings', [AmenitiesController::class, 'amenity_list']);
 Route::post('/amenity_bookings',[AmenitiesController::class, 'amenity_booking']);
 Route::get('/display_booking_amenity',[AmenitiesController::class, 'display_booking_amenity']);
 Route::get('/amenity_bookings',[AmenitiesController::class, 'display_bookingson_user']);

 Route::get('/allnotices_member', [NoticeController::class, 'displayallnoticestomember']);
 Route::get('/allmeetings_member', [NoticeController::class, 'displayallmeetingstomember']);










Route::view('parking','parking/parking');

Route::view('maintenance','maintenance/maintenance');
Route::get('maintenance', [MaintenanceController::class, 'displaymonthlybilltouser']); 


Route::view('confirm','auth/passwords/confirm');

Route::view('test','test');

Route::view('complaints','complaints/complaints');
Route::post('complaints',[ComplaintController::class,'addData']);
Route::get('complaints', [ComplaintController::class, 'displayonuser']); 

Route::view('shopping','shopping/shopping');

Route::get('/files/{id}',[DocumentController::class, 'show']);
Route::get('/files/download/{file}',[DocumentController::class, 'download']);
Route::get('/files',[DocumentController::class, 'index']);


Route::view('loginpage','loginpage');




Route::get('/test', [TestController::class, 'list']);

// Route::get('/home',[VisitorController::class, 'displaynoticetouser']);
Route::view('/allbills','maintenance/allbills');
Route::get('/maintenance',[MaintenanceController::class, 'displaybills']);

// Route::get('home', [VisitorsController::class, 'showsocietyname']);

Route::get('/submit', [PaymentController::class, 'submit']);
Route::get('/instamojo_redirect', [PaymentController::class, 'instamojo_redirect']);

Route::post('/instamojo_redirect', [PaymentController::class, 'instamojo_redirect']);













