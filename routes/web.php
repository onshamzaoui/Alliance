<?php


use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Instructor\InstructorController;
use App\Http\Controllers\Test\TestController;
use App\Http\Controllers\verification;
use App\Mail\ConfirmationMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

Route::get('/',[HomeController::class, 'index']) ->name('home.index');
Route::get('/login',[HomeController::class, 'login'])->name('home.login');
Route::get('/instructor/signup',[HomeController::class, 'signup']) ->name('home.signup');
Route::get('/etudiant/signup',[HomeController::class, 'signupetudiant']) ->name('home.signupetudiant');

Route::get('/admin',[AuthController::class, 'admin']) ->name('admin');
Route::get('/instructor',[AuthController::class, 'instructor'])->name('instructor');
Route::get('/etudiant',[AuthController::class, 'etudiant']) ->name('etudiant');


/**
 * authentication
 */
// Auth::routes(['verify'=>true]);

Route::post('/instructor/signup', [AuthController::class, 'registerPost'])->name('registerPost');
Route::post('/etudiant/signup', [AuthController::class, 'registerPostEtudiant'])->name('registerPostEtudiant');
Route::post('/login', [AuthController::class, 'loginPost'])->name('loginPost');
Route::get('/logout', [AuthController::class, 'logoutPost'])->name('logoutPost');
Route::get('/verify/{id}/{type}', [verification::class, 'index'])->name('index');
Route::post('/verify/confirm', [verification::class, 'verifyMyAccount'])->name('verifyMyAccount');


// Route::post('/login', 'AuthController@loginPost');


//route for mailing



//admin
Route::get('/admin/dashboard', [AdminController::class ,  'Dashboard'])->name('Dashboard');
Route::get('/admin/user/management', [AdminController::class ,  'UserManagement'])->name('UserManagement');

Route::get('/test', [TestController::class ,  'testfunction'])->name('testfunction');


//instructor
Route::get('/instructor/courses',[InstructorController::class, 'CoursesPage'])->name('CoursesPage');

Route::get('/instructor/courses/modify/{id}',[InstructorController::class, 'editCourse'])->name('editCourse');
Route::post('/instructor/courses/modify/',[InstructorController::class, 'updateAProgram'])->name('updateAProgram');

Route::get('/instructor/courses/add',[InstructorController::class, 'addCourse'])->name('addCourse');
Route::post('/instructor/courses/add',[InstructorController::class, 'addNewProgram'])->name('addNewProgram');

Route::post('/instructor/courses',[InstructorController::class, 'deleteCourse'])->name('deleteCourse');






Route::get('/instructor/profile',[InstructorController::class, 'viewProfile'])->name('viewProfile');
Route::post('/instructor/profile',[InstructorController::class, 'updateProfile'])->name('updateProfile');



Route::get('/instructor/items',[InstructorController::class, 'ItemsPage'])->name('ItemsPage');

Route::get('/instructor/item/add',[InstructorController::class, 'AddItemHomePage'])->name('AddItemHomePage');
Route::post('/instructor/item/add',[InstructorController::class, 'AddNewItem'])->name('AddNewItem');

Route::get('/instructor/items/modify/{id}',[InstructorController::class, 'editItem'])->name('editItem');
Route::post('/instructor/items/modify/',[InstructorController::class, 'updateItem'])->name('updateItem');

