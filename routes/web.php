<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;


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
// 1- write in route

Route::get('/Hello', function () {
    return 'Hello World';
});

// 2- Call view in route
Route::get('/', function () {
    return view('welcome');
});



Route::get('/',[HomeController::class,'index']) -> name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('admin')->name('admin.')->group(function () {
        //********************** Admin Panel Routes*********************//
        Route::get('/',[AdminHomeController::class,'index']) -> name('index');

        //********************** Admin Catogory Routes*********************//
        Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
                Route::get('/','index') -> name('index');
                Route::get('/create','create') -> name('create');
                Route::post('/store','store') -> name('store');
                Route::get('/edit/{id}','edit') -> name('edit');
                Route::post('/update/{id}','update') -> name('update');
                Route::get('/destroy/{id}','destroy') -> name('destroy');
                Route::get('/show/{id}','show') -> name('show');
        });
});
?>

