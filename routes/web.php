<?php

use App\Http\Controllers\HomePage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\manageTestsController;
use App\Http\Controllers\manageUsersController;

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

Route::get('/', [HomePage::class, 'index']);
Route::get('about-us', [HomePage::class, 'about_us'])->name('aboutus');
Route::get('contact-us', [HomePage::class, 'contact_us'])->name('contactus');
Route::get('privacy-policy', [HomePage::class, 'privacy_policy'])->name('privacy_policy');
Route::get('terms-conditions', [HomePage::class, 'terms_conditions'])->name('terms_conditions');
Route::get('refund-policy', [HomePage::class, 'refund_policy'])->name('refund_policy');

// master/check/route

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/user-dashboard', [dashboardController::class, 'index'])->name('user.dashboard');
    Route::get('/register-user', [manageUsersController::class, 'register'])->name('register.user');
    Route::post('/createuser', [manageUsersController::class, 'create'])->name('create.user');
    Route::get('/manage-users', [manageUsersController::class, 'manage_users'])->name('manage.users');
    Route::get('/user/edit/{id}', [manageUsersController::class, 'edit_user']);
    Route::post('/user/update', [manageUsersController::class, 'update_user'])->name('update.user');
    Route::get('/create-test', [manageTestsController::class, 'create'])->name('create.test');
    Route::post('/store-test', [manageTestsController::class, 'store'])->name('store.test');
    Route::get('/manage-tests', [manageTestsController::class, 'manage_tests'])->name('manage.tests');
    Route::get('/test/edit/{id}', [manageTestsController::class, 'edit_test']);
    Route::post('/test/update', [manageTestsController::class, 'update_test'])->name('update.test');
    Route::delete('/tests/{test}', [manageTestsController::class, 'delete_test'])->name('tests.destroy');

    
    Route::get('/assign-test-randomly', [manageTestsController::class, 'assign_test_randomly'])->name('assign.test.randomly');

    Route::get('/search/tests/data', [manageTestsController::class, 'search_tests_data'])->name('search.tests.data');
    Route::get('/search/labs/data', [manageTestsController::class, 'search_labs_data'])->name('search.labs.data');
    Route::post('/store-assigned-random-test', [manageTestsController::class, 'store_random_test_assigned'])->name('assign.random.test');
    Route::get('/manage-assigned-random-tests', [manageTestsController::class, 'manage_assigned_random_tests'])->name('manage.assigned.random.tests');

    Route::get('/assignedrandomtest/edit/{id}', [manageTestsController::class, 'edit_random_assigned_test']);
    Route::post('/update-assigned-random-test', [manageTestsController::class, 'update_random_test_assigned'])->name('update.assigned.random.test');
    Route::delete('/assignedtests/{assignedtest}', [manageTestsController::class, 'delete_assignedtest'])->name('assignedtest.destroy');
    
    

    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});