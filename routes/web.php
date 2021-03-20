<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AminDashboardController;
use App\Http\Controllers\Admin\ProductController;

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

//Route::get('/user/{user:id}', function (\App\Models\User $user) {
//    echo "<pre>";
//    print_r($user);
//    echo "</pre>";
//    die();
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('products', ProductController::class);
//Route::get('products', [ProductController::class, 'index']);

Route::prefix('admin')->namespace('Admin')->name('admin.')->middleware('admin')->group(static function() {

//    Route::get('products', [ProductController::class, 'index']);
//    Route::get('products/create', [ProductController::class, 'create']);


    Route::get('/', [AminDashboardController::class, 'index']);
    Route::get('/user', function (){
        echo "<pre>";
        print_r(route('admin.user'));
        echo "</pre>";
        return "Hello admin user";
    })->name('user');
});

//Subdomain Routing
Route::domain('{subdomain}.laraecommerce.com')->group(function () {
    Route::get('user/{id}', function ($subdomain, $id) {
        return "subdomain=".$subdomain.', Id='.$id;
    });
});

Route::get('/post/{id}', function ($id) {
    //
})->middleware('role:editor');

require __DIR__.'/auth.php';
