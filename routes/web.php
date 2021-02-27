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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/', [\App\Http\Controllers\PagesController::class, 'index']);

Route::get('/search/{search}', function ($search) {
    return $search;
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('admin')->namespace('Admin')->name('admin.')->middleware('admin')->group(static function() {
    //Route::middleware('admin')->group(static function () {
        //Route::get('/', [DashboardController::class, 'index']);
        Route::get('/user', function (){
            echo "<pre>";
            print_r(route('admin.user'));
            echo "</pre>";

            return "Hello admin";
        })->name('user');
    //});
});

//Subdomain Routing
Route::domain('{subdomain}.laraecommerce.com')->group(function () {
    Route::get('user/{id}', function ($subdomain, $id) {
        return "subdomain=".$subdomain.', Id='.$id;
    });
});

require __DIR__.'/auth.php';
