<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\AdminPanel\AdminCarController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\HomeCarController;
use App\Http\Controllers\UserController;
use App\Models\Role;

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

        //********************** Home Page Routes*********************//


Route::get('/',[HomeController::class,'index']) -> name('home');
Route::get('/about',[HomeController::class,'about']) -> name('about');
Route::get('/contact',[HomeController::class,'contact']) -> name('contact');
Route::get('/references',[HomeController::class,'references']) -> name('references');
Route::post('/storemessage',[HomeController::class,'storemessage']) -> name('storemessage');
Route::get('/faq',[HomeController::class,'faq']) -> name('faq');
Route::post('/storecomment',[HomeController::class,'storecomment']) -> name('storecomment');
Route::view('/loginuser','home.login') -> name('loginuser');
Route::view('/registeruser','home.register') -> name('registeruser');
Route::get('/logoutuser',[HomeController::class,'logout']) -> name('logoutuser');
Route::view('/loginadmin','admin.login') -> name('loginadmin');
Route::post('/loginadmincheck',[HomeController::class,'loginadmincheck']) -> name('loginadmincheck');
Route::post('/homecar',[HomeCarController::class,'homecar']) -> name('loginadmincheck');







Route::get('/car/{id}',[HomeController::class,'car']) -> name('car');

Route::get('/categorycars/{id}/{slug}',[HomeController::class,'categorycars']) -> name('categorycars');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//********************** Admin Auth Control*********************//

Route::middleware('auth')->group(function ()
{
    //********************** User Routes*********************//
    Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function () {

        Route::get('/','index') -> name('index');
        Route::get('/reviews','reviews') -> name('reviews');
        Route::get('/reviewdestroy/{id}','reviewdestroy') -> name('reviewdestroy');

         //********************** USER Car Routes*********************//
        Route::prefix('/homecar')->name('homecar.')->controller(HomeCarController::class)->group(function () {
            Route::get('/','index') -> name('index');
            Route::get('/create','create') -> name('create');
            Route::post('/store','store') -> name('store');
            Route::get('/edit/{id}','edit') -> name('edit');
            Route::post('/update/{id}','update') -> name('update');
            Route::get('/destroy/{id}','destroy') -> name('destroy');
            Route::get('/show/{id}','show') -> name('show');
        });

    });
    
    //********************** Admin Panel Routes*********************//
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () 
    {
        
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

            Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
                    Route::get('/{cid}','index') -> name('index');
                    Route::post('/store/{cid}','store') -> name('store');
                    Route::get('/update/{cid}/{id}','update') -> name('update');
                    Route::get('/destroy/{cid}/{id}','destroy') -> name('destroy');
            
                });

            //************************ Admin Message Routes ********************//
            Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
                    Route::get('/','index') -> name('index');
                    Route::get('/show/{id}','show') -> name('show');
                    Route::post('/update/{id}','update') -> name('update');
                    Route::get('/destroy/{id}','destroy') -> name('destroy');


        });
            //************************ Admin FAQ Routes ********************//
                Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
                    Route::get('/','index') -> name('index');
                    Route::get('/create','create') -> name('create');
                    Route::post('/store','store') -> name('store');
                    Route::get('/edit/{id}','edit') -> name('edit');
                    Route::post('/update/{id}','update') -> name('update');
                    Route::get('/destroy/{id}','destroy') -> name('destroy');
                    Route::get('/show/{id}','show') -> name('show');
            });

            //************************ Admin Comment Routes ********************//
            Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function () {
                Route::get('/','index') -> name('index');
                Route::get('/show/{id}','show') -> name('show');
                Route::post('/update/{id}','update') -> name('update');
                Route::get('/destroy/{id}','destroy') -> name('destroy');


            });
                //************************ Admin User Routes ********************//
                Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
                    Route::get('/','index') -> name('index');
                    Route::get('/edit/{id}','edit') -> name('edit');
                    Route::get('/show/{id}','show') -> name('show');
                    Route::post('/update/{id}','update') -> name('update');
                    Route::get('/destroy/{id}','destroy') -> name('destroy');
                    Route::post('/addrole/{id}','addrole') -> name('addrole');
                    Route::get('/destroyrole/{uid}/{rid}','destroyrole') -> name('destroyrole');

        
                });
                
        
    });

});
?>

