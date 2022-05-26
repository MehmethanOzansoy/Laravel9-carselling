<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\AdminCarController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\ImageController;

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
Route::get('/about',[HomeController::class,'about']) -> name('about');
Route::get('/contact',[HomeController::class,'contact']) -> name('contact');
Route::get('/references',[HomeController::class,'references']) -> name('references');


Route::get('/car/{id}',[HomeController::class,'car']) -> name('car');

Route::get('/categorycars/{id}/{slug}',[HomeController::class,'categorycars']) -> name('categorycars');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('admin')->name('admin.')->group(function () {
        //********************** Admin Panel Routes*********************//
        Route::get('/',[AdminHomeController::class,'index']) -> name('index');
        

         //********************** General Routes*********************//
        Route::get('/setting',[AdminHomeController::class,'setting']) -> name('setting');
        Route::post('/setting',[AdminHomeController::class,'settingUpdate']) -> name('setting.update');

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

          //********************** Admin Car Routes*********************//
        Route::prefix('/car')->name('car.')->controller(AdminCarController::class)->group(function () {
                Route::get('/','index') -> name('index');
                Route::get('/create','create') -> name('create');
                Route::post('/store','store') -> name('store');
                Route::get('/edit/{id}','edit') -> name('edit');
                Route::post('/update/{id}','update') -> name('update');
                Route::get('/destroy/{id}','destroy') -> name('destroy');
                Route::get('/show/{id}','show') -> name('show');
    });
        //************************ Admin Car Image Gallarey Routes ********************//
        Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
                Route::get('/{cid}','index') -> name('index');
                Route::post('/store/{cid}','store') -> name('store');
                Route::get('/update/{cid}/{id}','update') -> name('update');
                Route::get('/destroy/{cid}/{id}','destroy') -> name('destroy');

});
        
});
?>

