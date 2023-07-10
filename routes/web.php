<?php

use App\Http\Controllers\Admin\AccountsController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\FaqCategoryController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\GalleryCategoryController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ResourceController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController as ControllersContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [IndexController::class, 'index'])->name('index');

// Public Routes
Route::group(['middleware' => ['throttle:25,1']], function () {
    Route::get('welcome', [PagesController::class, 'welcome'])->name('welcome');
    Route::get('splash', [PagesController::class, 'splash'])->name('splash');
    Route::get('home', [PagesController::class, 'home'])->name('home');
    Route::get('about', [PagesController::class, 'about'])->name('about');
    Route::get('resource', [PagesController::class, 'resource'])->name('resource');
    Route::get('news', [PagesController::class, 'news'])->name('news');
    Route::get('grievances', [PagesController::class, 'grievances'])->name('grievances');
    Route::get('contact', [PagesController::class, 'contact'])->name('contact');
    Route::get('faqs', [PagesController::class, 'faqs'])->name('faqs');
    Route::get('feedback', [PagesController::class, 'feedback'])->name('feedback');
    Route::get('blogs', [PagesController::class, 'blogs'])->name('blogs');
    Route::get('blog_details/{permanent_link}', [PagesController::class, 'blogDetails'])->name('blog_details');
    Route::get('policy', [PagesController::class, 'policy'])->name('policy');
    Route::get('not_found', [PagesController::class, 'not_found'])->name('not_found');
    Route::get('gallery', [PagesController::class, 'gallery'])->name('gallery');
    Route::post('feedback', [ControllersContactController::class, 'contactStore'])->name('contactStore');
});

//Admin Routes
Route::middleware(['auth', 'role.checker:admin', 'throttle:100,1'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::name('admin.')->group(function () {

            // Slider
            Route::name('slider.')->group(function () {
                Route::get('slider', [SliderController::class, 'index'])->name('index'); // show all slider
                Route::get('slider/create', [SliderController::class, 'create'])->name('create'); // show the add new slider
                Route::post('slider', [SliderController::class, 'store'])->name('store'); // store new slider
                Route::get('slider/edit/{id}', [SliderController::class, 'edit'])->name('edit'); // edit existing slider
                Route::patch('slider/update/{id}', [SliderController::class, 'update'])->name('update'); // update existing slider
                Route::delete('slider/delete/{id}', [SliderController::class, 'destroy'])->name('delete'); // delete existing slider
                Route::get('slider/deleted/show', [SliderController::class, 'showDeleted'])->name('deleted.show'); // delete existing slider
                Route::put('slider/deleted/restore/{id}', [SliderController::class, 'restoreDeleted'])->name('deleted.restore'); // delete existing slider
            });

            // Roles
            Route::name('roles.')->group(function () {
                Route::get('roles', [RolesController::class, 'index'])->name('index'); // show all roles
                Route::get('roles/create', [RolesController::class, 'create'])->name('create'); // show the add new roles
                Route::post('roles', [RolesController::class, 'store'])->name('store'); // store new roles
                Route::get('roles/edit/{id}', [RolesController::class, 'edit'])->name('edit'); // edit existing roles
                Route::patch('roles/update/{id}', [RolesController::class, 'update'])->name('update'); // update existing roles
                Route::delete('roles/delete/{id}', [RolesController::class, 'destroy'])->name('delete'); // delete existing roles
                Route::get('roles/deleted/show', [RolesController::class, 'showDeleted'])->name('deleted.show'); // delete existing roles
                Route::put('roles/deleted/restore/{id}', [RolesController::class, 'restoreDeleted'])->name('deleted.restore'); // delete existing roles
            });

            // Gallery Category
            Route::name('GalleryCategory.')->group(function () {
                Route::get('GalleryCategory', [GalleryCategoryController::class, 'index'])->name('index'); // show all category
                Route::get('GalleryCategory/create', [GalleryCategoryController::class, 'create'])->name('create'); // show the add new category
                Route::post('GalleryCategory', [GalleryCategoryController::class, 'store'])->name('store'); // store new category
                Route::get('GalleryCategory/edit/{id}', [GalleryCategoryController::class, 'edit'])->name('edit'); // edit existing category
                Route::patch('GalleryCategory/update/{id}', [GalleryCategoryController::class, 'update'])->name('update'); // update existing category
                Route::delete('GalleryCategory/delete/{id}', [GalleryCategoryController::class, 'destroy'])->name('delete'); // delete existing category
                Route::get('GalleryCategory/deleted/show', [GalleryCategoryController::class, 'showDeleted'])->name('deleted.show'); // delete existing category
                Route::put('GalleryCategory/deleted/restore/{id}', [GalleryCategoryController::class, 'restoreDeleted'])->name('deleted.restore'); // delete existing category
            });

            // Account
            Route::name('accounts.')->group(function () {
                Route::get('accounts', [AccountsController::class, 'index'])->name('index'); // show all Accounts
                Route::get('accounts/create', [AccountsController::class, 'create'])->name('create'); // show the add new Accounts
                Route::post('accounts', [AccountsController::class, 'store'])->name('store')->middleware('decrypt.payload'); // store new Accounts
                Route::get('accounts/edit/{id}', [AccountsController::class, 'edit'])->name('edit'); // edit existing Accounts
                Route::patch('accounts/update/{id}', [AccountsController::class, 'update'])->name('update')->middleware('decrypt.payload'); // update existing Accounts
                Route::delete('accounts/delete/{id}', [AccountsController::class, 'destroy'])->name('delete'); // delete existing Accounts
                Route::get('accounts/deleted/show', [AccountsController::class, 'showDeleted'])->name('deleted.show'); // delete existing Accounts
                Route::put('accounts/deleted/restore/{id}', [AccountsController::class, 'restoreDeleted'])->name('deleted.restore'); // delete existing Accounts
            });

            // Gallery
            Route::name('gallery.')->group(function () {
                Route::get('gallery', [GalleryController::class, 'index'])->name('index'); // show all gallery
                Route::get('gallery/create', [GalleryController::class, 'create'])->name('create'); // show the add new gallery
                Route::post('gallery/upload', [GalleryController::class, 'imageUpload'])->name('upload'); // store new gallery
                Route::post('gallery', [GalleryController::class, 'store'])->name('store'); // store new gallery
                Route::delete('gallery/delete/{id}', [GalleryController::class, 'destroy'])->name('delete'); // delete existing gallery
                Route::get('gallery/deleted/show', [GalleryController::class, 'showDeleted'])->name('deleted.show'); // delete existing gallery
                Route::put('gallery/deleted/restore/{id}', [GalleryController::class, 'restoreDeleted'])->name('deleted.restore'); // delete existing gallery
            });

            // Resource
            Route::name('resource.')->group(function () {
                Route::get('resource', [ResourceController::class, 'index'])->name('index'); // show all resource
                Route::get('resource/create', [ResourceController::class, 'create'])->name('create'); // show the add new resource
                Route::post('resource', [ResourceController::class, 'store'])->name('store'); // store new resource
                Route::get('resource/edit/{id}', [ResourceController::class, 'edit'])->name('edit'); // edit existing resource
                Route::patch('resource/update/{id}', [ResourceController::class, 'update'])->name('update'); // update existing resource
                Route::delete('resource/delete/{id}', [ResourceController::class, 'destroy'])->name('delete'); // delete existing resource
                Route::get('resource/deleted/show', [ResourceController::class, 'showDeleted'])->name('deleted.show'); // delete existing resource
                Route::put('resource/deleted/restore/{id}', [ResourceController::class, 'restoreDeleted'])->name('deleted.restore'); // delete existing resource
            });

            // News
            Route::name('news.')->group(function () {
                Route::get('news', [NewsController::class, 'index'])->name('index'); // show all news
                Route::get('news/create', [NewsController::class, 'create'])->name('create'); // show the add new news
                Route::post('news', [NewsController::class, 'store'])->name('store'); // store new news
                Route::get('news/edit/{id}', [NewsController::class, 'edit'])->name('edit'); // edit existing news
                Route::patch('news/update/{id}', [NewsController::class, 'update'])->name('update'); // update existing news
                Route::delete('news/delete/{id}', [NewsController::class, 'destroy'])->name('delete'); // delete existing news
                Route::get('news/deleted/show', [NewsController::class, 'showDeleted'])->name('deleted.show'); // delete existing news
                Route::put('news/deleted/restore/{id}', [NewsController::class, 'restoreDeleted'])->name('deleted.restore'); // delete existing news
            });

            // Faq Category
            Route::name('FaqCategory.')->group(function () {
                Route::get('FaqCategory', [FaqCategoryController::class, 'index'])->name('index'); // show all category
                Route::get('FaqCategory/create', [FaqCategoryController::class, 'create'])->name('create'); // show the add new category
                Route::post('FaqCategory', [FaqCategoryController::class, 'store'])->name('store'); // store new category
                Route::get('FaqCategory/edit/{id}', [FaqCategoryController::class, 'edit'])->name('edit'); // edit existing category
                Route::patch('FaqCategory/update/{id}', [FaqCategoryController::class, 'update'])->name('update'); // update existing category
                Route::delete('FaqCategory/delete/{id}', [FaqCategoryController::class, 'destroy'])->name('delete'); // delete existing category
                Route::get('FaqCategory/deleted/show', [FaqCategoryController::class, 'showDeleted'])->name('deleted.show'); // delete existing category
                Route::put('FaqCategory/deleted/restore/{id}', [FaqCategoryController::class, 'restoreDeleted'])->name('deleted.restore'); // delete existing category
            });

            // Faq
            Route::name('faq.')->group(function () {
                Route::get('faq', [FaqController::class, 'index'])->name('index'); // show all faq
                Route::get('faq/create', [FaqController::class, 'create'])->name('create'); // show the add new faq
                Route::post('faq', [FaqController::class, 'store'])->name('store'); // store new faq
                Route::get('faq/edit/{id}', [FaqController::class, 'edit'])->name('edit'); // edit existing faq
                Route::patch('faq/update/{id}', [FaqController::class, 'update'])->name('update'); // update existing faq
                Route::delete('faq/delete/{id}', [FaqController::class, 'destroy'])->name('delete'); // delete existing faq
                Route::get('faq/deleted/show', [FaqController::class, 'showDeleted'])->name('deleted.show'); // delete existing faq
                Route::put('faq/deleted/restore/{id}', [FaqController::class, 'restoreDeleted'])->name('deleted.restore'); // delete existing faq
            });

            // Blog
            Route::name('blog.')->group(function () {
                Route::get('blog', [BlogController::class, 'index'])->name('index'); // show all blog
                Route::get('blog/create', [BlogController::class, 'create'])->name('create'); // show the add new blog
                Route::post('blog', [BlogController::class, 'store'])->name('store'); // store new blog
                Route::get('blog/edit/{id}', [BlogController::class, 'edit'])->name('edit'); // edit existing blog
                Route::patch('blog/update/{id}', [BlogController::class, 'update'])->name('update'); // update existing blog
                Route::delete('blog/delete/{id}', [BlogController::class, 'destroy'])->name('delete'); // delete existing blog
                Route::get('blog/deleted/show', [BlogController::class, 'showDeleted'])->name('deleted.show'); // delete existing blog
                Route::put('blog/deleted/restore/{id}', [BlogController::class, 'restoreDeleted'])->name('deleted.restore'); // delete existing blog
            });

            // Feedback
            Route::name('feedback.')->group(function () {
                Route::get('feedback', [FeedbackController::class, 'index'])->name('index'); // show all feedback
            });
        });
    });
});

//Auth Routes
Route::group(
    ['middleware' => ['throttle:25,1']],
    function () {
        Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [LoginController::class, 'login'])->name('login')->middleware('decrypt.payload');
    }
);

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('index');
})->name('logout');
