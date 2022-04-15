<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController;


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

//********************** Admin Panel Routes*********************//
Route::get('/admin',[AdminHomeController::class,'index']) -> name('admin');

//********************** Admin Catogory Routes*********************//

Route::get('/admin/category',[CategoryController::class,'index']) -> name('admin_category');
Route::get('/admin/category/create',[CategoryController::class,'create']) -> name('admin_category_create');
Route::post('/admin/category/store',[CategoryController::class,'store']) -> name('admin_category_store');
?>

