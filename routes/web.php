<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminCodeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\AdminSettingController;
use App\Http\Controllers\AdminTaskController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryBlogController;
use App\Http\Controllers\CodeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| ROUTE LOGIN 🟢
|--------------------------------------------------------------------------
*/

Route::controller(LoginController::class)->prefix('/login')->group(function () {
    Route::get('/', 'index')->name('login');
    Route::post('/', 'authenticate')->name('auth');
});

Route::controller(LogoutController::class)->prefix('/logout')->group(function () {
    Route::get('/', 'logout')->name('logout.perform');
});

/*
|--------------------------------------------------------------------------
| END ROUTE LOGIN 🟤
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| ROUTE FRONTEND 🟢
|--------------------------------------------------------------------------
*/
Route::controller(HomeController::class)->prefix('/')->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/home', 'index')->name('home');
});

Route::controller(BlogController::class)->prefix('/blog')->group(function () {
    Route::get('/', 'index')->name('blog');
});

Route::controller(ProjectController::class)->prefix('/project')->group(function () {
    Route::get('/', 'index')->name('project');
});

Route::controller(CodeController::class)->prefix('/code')->group(function () {
    Route::get('/', 'index')->name('code');
});

Route::controller(AboutController::class)->prefix('/about')->group(function () {
    Route::get('/', 'index')->name('about');
});

Route::controller(BlogController::class)->prefix('/blog')->group(function () {
    Route::get('/', 'index')->name('blog');
    Route::get('/detail/{id}', 'detail')->name('detail.blog');
});

/*
|--------------------------------------------------------------------------
| END ROUTE FRONTEND 🟤
|--------------------------------------------------------------------------
*/




/*
|--------------------------------------------------------------------------
| ROUTE PAGE ADMIN 🟢
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'admin'], function () {

    Route::controller(AdminController::class)->prefix('/dashboard')->group(function () {
        Route::get('/', 'index')->name('dashboard');
    });

    Route::controller(AdminBlogController::class)->prefix('/admin/blog')->group(function () {
        Route::get('/home', 'index')->name('admin-blog.home');
        Route::get('/', 'index')->name('admin-blog.index');
        Route::get('/create', 'create')->name('admin-blog.create');
        Route::get('/detail/{id}', 'show')->name('admin-blog.show');
        Route::get('/edit/{id}', 'edit')->name('admin-blog.edit');
        Route::get('/persetujuan', 'persetujuan')->name('admin-blog.persetujuan');
        Route::patch('/{id}', 'update')->name('admin-blog.update');
        Route::patch('/status/{id}', 'status')->name('admin-blog.status');
        Route::post('/', 'store')->name('admin-blog.strore');
        Route::delete('/{id}', 'destroy')->name('admin-blog.destroy');
    });

    Route::controller(CategoryBlogController::class)->prefix('/admin/blog')->group(function () {
        Route::get('/category', 'index')->name('admin-blog-category.index');
        Route::patch('/category/{id}', 'update')->name('admin-blog-category.update');
        Route::post('/category', 'store')->name('admin-blog-category.strore');
        Route::delete('/category/{id}', 'destroy')->name('admin-blog-category.destroy');
    });

    Route::controller(AdminProjectController::class)->prefix('/admin/project')->group(function () {
        Route::get('/', 'index')->name('admin-project.index');
        Route::get('/create', 'create')->name('admin-project.create');
        Route::get('/edit/{id}', 'edit')->name('admin-project.edit');
        Route::get('/detail/{id}', 'detail')->name('admin-project.detail');
        Route::patch('/{id}', 'update')->name('admin-project.update');
        Route::post('/', 'store')->name('admin-project.strore');
        Route::delete('/{id}', 'destroy')->name('admin-project.destroy');
    });

    Route::controller(AdminCodeController::class)->prefix('/admin/code')->group(function () {
        Route::get('/', 'index')->name('admin-code.index');
        Route::get('/create', 'create')->name('admin-code.create');
        Route::get('/edit/{id}', 'edit')->name('admin-code.edit');
        Route::get('/detail/{id}', 'detail')->name('admin-code.detail');
        Route::patch('/{id}', 'update')->name('admin-code.update');
        Route::post('/', 'store')->name('admin-code.strore');
        Route::delete('/{id}', 'destroy')->name('admin-code.destroy');
    });

    Route::controller(AdminAboutController::class)->prefix('/admin/about')->group(function () {
        Route::get('/', 'index')->name('admin-about.index');
        Route::get('/create', 'create')->name('admin-about.create');
        Route::get('/edit/{id}', 'edit')->name('admin-about.edit');
        Route::get('/detail/{id}', 'detail')->name('admin-about.detail');
        Route::patch('/{id}', 'update')->name('admin-about.update');
        Route::post('/', 'store')->name('admin-about.strore');
        Route::delete('/{id}', 'destroy')->name('admin-about.destroy');
    });

    Route::controller(AdminTaskController::class)->prefix('/admin/task')->group(function () {
        Route::get('/', 'index')->name('admin-task.index');
        Route::get('/create', 'create')->name('admin-task.create');
        Route::get('/edit/{id}', 'edit')->name('admin-task.edit');
        Route::get('/detail/{id}', 'detail')->name('admin-task.detail');
        Route::patch('/{id}', 'update')->name('admin-task.update');
        Route::post('/', 'store')->name('admin-task.strore');
        Route::delete('/{id}', 'destroy')->name('admin-task.destroy');
    });

    Route::controller(AdminSettingController::class)->prefix('/admin/setting')->group(function () {
        Route::get('/', 'index')->name('admin-setting.index');
        Route::get('/edit/{id}', 'edit')->name('admin-setting.edit');
        Route::get('/detail/{id}', 'detail')->name('admin-setting.detail');
        Route::patch('/{id}', 'update')->name('admin-setting.update');
        Route::post('/', 'store')->name('admin-setting.strore');
        Route::delete('/{id}', 'destroy')->name('admin-setting.destroy');
    });
});
/*
|--------------------------------------------------------------------------
| END ROUTE PAGE ADMIN 🟤
|--------------------------------------------------------------------------
*/
