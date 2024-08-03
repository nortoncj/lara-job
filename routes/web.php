<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job\Job;
use App\Http\Controllers\Jobs\JobsController;

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

Route::get('/', function () {
    $jobs = Job::select()->take(5)->orderby('id', 'desc')->get();
        $totalJobs = Job::all()->count();
    return view('welcome', compact('jobs','totalJobs'));
});
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\Jobs\JobsController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\Jobs\JobsController::class, 'contact'])->name('contact');

Route::group(['prefix' => 'jobs'], function () {
    Route::get('single/{id}', [App\Http\Controllers\Jobs\JobsController::class, 'single'])->name('single.job');
    Route::post('save', [App\Http\Controllers\Jobs\JobsController::class, 'saveJob'])->name('save.job');
    Route::post('apply', [App\Http\Controllers\Jobs\JobsController::class, 'applyJob'])->name('apply.job');
    Route::any('search', [App\Http\Controllers\Jobs\JobsController::class, 'search'])->name('search.job');
});

Route::group(['prefix' => 'categories'], function () {
    Route::get('single/{name}', [App\Http\Controllers\Categories\CategoriesController::class, 'singleCategory'])->name('categories.single');
});

Auth::routes();

Route::group(['prefix' => 'users'], function() {
    Route::get('profile', [App\Http\Controllers\Users\UsersController::class, 'profile'])->name('profile');
    Route::get('applications', [App\Http\Controllers\Users\UsersController::class, 'applications'])->name('applications');
    Route::get('saved', [App\Http\Controllers\Users\UsersController::class, 'savedJobs'])->name('savedjobs');

    Route::get('edit-details', [App\Http\Controllers\Users\UsersController::class, 'editDetails'])->name('users.edit_details');
    Route::post('edit-details', [App\Http\Controllers\Users\UsersController::class, 'updateDetails'])->name('users.update_details');

    Route::get('edit-cv', [App\Http\Controllers\Users\UsersController::class, 'editCV'])->name('users.edit_cv');
    Route::post('edit-cv', [App\Http\Controllers\Users\UsersController::class, 'updateCV'])->name('users.update_cv');

});

Route::get('/add-permissions',[App\Http\Controllers\RolesAndPermissionsController::class,'addPermissions'])->name('add.permission');
Route::get('/test', [App\Http\Controllers\HomeController::class, 'test'])->name('test');
//      ADMIN ROUTES
Route::get('admin/login',[App\Http\Controllers\Admin\AdminController::class, 'login'])->name('admin.login')->middleware('checkforauth');
Route::post('admin/login',[App\Http\Controllers\Admin\AdminController::class, 'checkLogin'])->name('check.login');

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/',[App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.index');
    Route::get('/all',[App\Http\Controllers\Admin\AdminController::class, 'admins'])->name('admin.admin-all');
    Route::get('/categories/all',[App\Http\Controllers\Admin\AdminController::class, 'categories'])->name('admin.categories-all');
    Route::get('/jobs/all',[App\Http\Controllers\Admin\AdminController::class, 'jobs'])->name('admin.jobs-all');
    Route::get('/applications/all',[App\Http\Controllers\Admin\AdminController::class, 'applications'])->name('admin.applications-all');
    Route::get('/roles/all',[App\Http\Controllers\Admin\AdminController::class, 'roles'])->name('admin.roles-all');

    Route::get('/create-admins',[App\Http\Controllers\Admin\AdminController::class, 'createAdmins'])->name('create.admins');
    Route::post('/create-admins',[App\Http\Controllers\Admin\AdminController::class, 'saveAdmin'])->name('save.admin');

    Route::get('/create-category',[App\Http\Controllers\Admin\AdminController::class, 'createCategory'])->name('create.category');
    Route::post('/create-category',[App\Http\Controllers\Admin\AdminController::class, 'saveCategory'])->name('save.category');

    Route::get('/create-job',[App\Http\Controllers\Admin\AdminController::class, 'createJobs'])->name('create.jobs');
    Route::post('/create-job',[App\Http\Controllers\Admin\AdminController::class, 'saveJobs'])->name('save.jobs');

    Route::get('/create-roles',[App\Http\Controllers\Admin\AdminController::class, 'createRoles'])->name('create.roles');
    Route::post('/create-roles',[App\Http\Controllers\Admin\AdminController::class, 'saveRoles'])->name('save.roles');



    // Update
    Route::get('/edit-category/{id}',[App\Http\Controllers\Admin\AdminController::class, 'editCategories'])->name('edit.categories');
    Route::post('/update-category/{id}',[App\Http\Controllers\Admin\AdminController::class, 'updateCategories'])->name('update.categories');
    Route::get('/edit-job/{id}',[App\Http\Controllers\Admin\AdminController::class, 'editJobs'])->name('edit.jobs');
    Route::post('/update-job/{id}',[App\Http\Controllers\Admin\AdminController::class, 'updateJobs'])->name('update.jobs');
    Route::get('/edit-role/{id}',[App\Http\Controllers\Admin\AdminController::class, 'editRoles'])->name('edit.roles');
    Route::post('/update-role/{id}',[App\Http\Controllers\Admin\AdminController::class, 'updateRoles'])->name('update.roles');

    // Delete
    Route::get('/delete-category/{id}',[App\Http\Controllers\Admin\AdminController::class, 'deleteCategories'])->name('delete.category');
    Route::get('/delete-job/{id}',[App\Http\Controllers\Admin\AdminController::class, 'deleteJobs'])->name('delete.job');
    Route::get('/delete-app/{id}',[App\Http\Controllers\Admin\AdminController::class, 'deleteApps'])->name('delete.apps');

});
