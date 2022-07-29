<?php

use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\SubchildcategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\NewInstitutionController;
use App\Http\Controllers\DailyReportController;
use App\Http\Controllers\DailyReportNotApiController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SyllabusController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['middleware' => 'auth'], function () {

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//New Routes

Route::get('add_school',[SchoolController::class,'index'])->name("add_school");
Route::post('store_school',[SchoolController::class,'store_school'])->name("store_school");
Route::get('view_school',[SchoolController::class,'view_school'])->name("view_school");
Route::get('view_attendance/{id}',[SchoolController::class,'view_attendance'])->name("view_attendance");
Route::get("view_attendace_student/{id}",[AttendanceController::class,"view_attendace_student"])->name("view_attendace_student");
Route::get('delete_school/{school}',[SchoolController::class,'delete_school'])->name("delete_school");

Route::get('view_daily_report/{id}',[SchoolController::class,'view_daily_report'])->name("view_daily_report");
Route::get('view_complaints',[SchoolController::class,'view_complaints'])->name("view_complaints");
Route::get('assign_principal/{school}',[SchoolController::class,'assign_principal'])->name("assign_principal");
Route::post('change_principal',[SchoolController::class,'change_principal'])->name("change_principal");
Route::get('view_schedule/{id}',[SchoolController::class,'view_schedule'])->name("view_schedule");
Route::get('view_stationary_request',[SchoolController::class,'view_stationary_request'])->name("view_stationary_request");
Route::get('approved_stationary_request',[SchoolController::class,'approved_stationary_request'])->name("approved_stationary_request");
Route::get('approve_stationary/{stationary}',[SchoolController::class,'approve_stationary'])->name('approve_stationary');

Route::get('resolved_emergency_requests',[ComplaintController::class,'resolved_emergency_requests'])->name("resolved_emergency_requests");
Route::get('pending_emergency_requests',[ComplaintController::class,'pending_emergency_requests'])->name("pending_emergency_requests");
Route::get('update_request_status/{id}',[ComplaintController::class,'update_request_status'])->name("update_request_status");


//View Volunteers

Route::get('volunteer' , [VolunteerController::class,'index'])->name('volunteer');
Route::get('volunteer/updateVolunteer/{id}',[VolunteerController::class,'edit'])->name('edit');
//Route::post('volunteer/updateVolunteer',[VolunteerController::class,'update'])->name('update');

//View Students
Route::get('Student/view_student',[StudentController::class,'view_student'])->name('view_student');

//View Institutions
Route::get('Institute/addInstitute',[InstitutionController::class,'view_institution'])->name('view_institution');
//Add Institutions
Route::get('Institute/addNewInstitute' , [InstitutionController::class,'create'])->name('create');

//View Daily Reports
Route::get('Report/ViewReport',[DailyReportNotApiController::class,'view_DailyReport'])->name('view_DailyReport');

//View Syllabus
Route::get('Syllabus/ViewSyllabus',[SyllabusController::class,'view_Syllabus'])->name('view_Syllabus');

//Add Notification
Route::get('Notification/addNotification' , [NotificationController::class,'Add_Notification'])->name('Add_Notification');
Route::post('notification_store',[NotificationController::class,'notification_store'])->name("notification_store");
Route::get('Notification/viewNotification' , [NotificationController::class,'view_Notification'])->name('View_Notification');

//category
Route::get('categories/addcategories' , [CategoryController::class,'create'])->name('category.create');
Route::post('categories/addcategories' , [CategoryController::class,'store'])->name('category.store');
Route::get('categories/updatecategories/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('categories/updatecategories',[CategoryController::class,'update'])->name('category.update');
Route::get('categories/destroy/{id}',[CategoryController::class,'destroy'])->name('category.destroy');

//subcategory
Route::get('/subcategories' , [SubcategoryController::class,'index'])->name('subcategory.index');
Route::get('subcategories/addsubcategories' , [SubcategoryController::class,'create'])->name('subcategory.create');
Route::post('subcategories/addsubcategories' , [SubcategoryController::class,'store'])->name('subcategory.store');
Route::get('subcategories/updatesubcategories/{id}',[SubcategoryController::class,'edit'])->name('subcategory.edit');
Route::post('subcategories/updatesubcategories',[SubcategoryController::class,'update'])->name('subcategory.update');
Route::get('subcategories/destroy/{id}',[SubcategoryController::class,'destroy'])->name('subcategory.destroy');


//subchildcategory
Route::get('/subchildcategories' , [SubchildcategoryController::class,'index'])->name('subchildcategory.index');
Route::get('subchildcategories/addsubchildcategories' , [SubchildcategoryController::class,'create'])->name('subchildcategory.create');
Route::post('subchildcategories/addsubchildcategories' , [SubchildcategoryController::class,'store'])->name('subchildcategory.store');
Route::get('subchildcategories/updatesubchildcategories/{id}',[SubchildcategoryController::class,'edit'])->name('subchildcategory.edit');
Route::post('subchildcategories/updatesubchildcategories',[SubchildcategoryController::class,'update'])->name('subchildcategory.update');
Route::get('subchildcategories/destroy/{id}',[SubchildcategoryController::class,'destroy'])->name('subchildcategory.destroy');

//Postszzzzzzzzz
Route::get('/post' , [PostController::class,'index'])->name('post.index');
Route::get('post/addpost' , [PostController::class,'create'])->name('post.create');
Route::post('post/addpost' , [PostController::class,'store'])->name('post.store');
Route::get('post/updatepost/{id}',[PostController::class,'edit'])->name('post.edit');
Route::post('post/updatepost',[PostController::class,'update'])->name('post.update');

Route::get('post/destroy/{id}',[PostController::class,'destroy'])->name('post.destroy');
Route::delete('deleteimage/{id}',[PostController::class,'deleteimage']);


//ImageGallery
Route::get('/imagegallery' , [ImageController::class,'index'])->name('image.index');
Route::get('/imagegallery/addimage' , [ImageController::class,'create'])->name('image.create');
Route::post('/imagegallery' , [ImageController::class,'store'])->name('image.store');


//Video
Route::get('/videos' , [VideoController::class,'index'])->name('video.index');
Route::get('video/addvideo' , [VideoController::class,'create'])->name('video.create');
Route::post('video/addvideo' , [VideoController::class,'store'])->name('video.store');
Route::get('video/updatevideo/{id}' , [VideoController::class,'edit'])->name('video.edit');
Route::post('video/updatevideo' , [VideoController::class,'update'])->name('video.update');
Route::get('video/destroy/{id}',[PostController::class,'destroy'])->name('video.destroy');


});

//Outside Authentication
Route::get('/' , function(){
    return view('dashboard');
})->middleware('auth');
Route::get('/About' , [BlogController::class,'About']);
Route::get('/Contact' , [BlogController::class,'Contact']);
Route::get('/blog' , [BlogController::class,'blog']);
Route::get('/singlepost/{post}' , [BlogController::class,'singlepost'])->name('singlepost');
Route::get('/image' , [BlogController::class,'image']);
Route::get('/video' , [BlogController::class,'video']);



require __DIR__.'/auth.php';

