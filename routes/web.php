<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/clear', function () {
  Artisan::call('route:clear');
  Artisan::call('cache:clear');
  Artisan::call('config:clear');
  Artisan::call('view:clear');
  Artisan::call('optimize:clear');
  return "Cache is cleared";
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/', [FrontendController::class, 'index'])->name('/');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/how-it-works', [FrontendController::class, 'how_it_works'])->name('how-it-works');
Route::get('/track-your-song', [FrontendController::class, 'track_your_song'])->name('track-your-song');
Route::get('/not-found', [FrontendController::class, 'not_found'])->name('not-found');
Route::post('/contact-submit', [FrontendController::class, 'contact_submit'])->name('contact-submit');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/terms', [FrontendController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [FrontendController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/copyright-info', [FrontendController::class, 'copyright_info'])->name('copyright-info');
Route::get('/cockies-policy', [FrontendController::class, 'cockies_policy'])->name('cockies-policy');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
Route::get('/create-your-song', [FrontendController::class, 'create_your_song'])->name('create-your-song');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/admin-testing',       [AdminController::class, 'admin_testing'])->name('admin-testing');




// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/website-status', [HomeController::class, 'website_status'])->name('website-status');
Route::get('/manage-settings', [HomeController::class, 'manage_settings'])->name('manage-settings');
Route::get('/manage-contact-enquiry', [HomeController::class, 'manage_contact_enquiry'])->name('manage-contact-enquiry');
Route::get('/manage-testimonials', [HomeController::class, 'manage_testimonials'])->name('manage-testimonials');
Route::get('/manage-faq', [HomeController::class, 'manage_faq'])->name('manage-faq');

Route::post('updateWebsiteStatus', [HomeController::class, 'updateWebsiteStatus'])->name('updateWebsiteStatus');
Route::post('testimonials-store', [HomeController::class, 'testimonials_store'])->name('testimonials-store');
Route::get('/del-testimonials/{id?}', [HomeController::class, 'del_testimonials'])->name('del-testimonials');

Route::post('faq-store', [HomeController::class, 'faq_store'])->name('faq-store');
Route::get('/del-faq/{id?}', [HomeController::class, 'del_faq'])->name('del-faq');

Route::post('/save-setting', [HomeController::class, 'save_setting'])->name('save-setting');

Route::get('/image-categories', [HomeController::class, 'image_categories'])->name('image-categories');
Route::post('/image-category-store', [HomeController::class, 'imageCategoryStore'])->name('image-category-store');
Route::get('/del-image-category/{id?}', [HomeController::class, 'del_image_category'])->name('del-image-category');
Route::post('/update-image-category', [HomeController::class, 'updateImageCategory'])->name('update-image-category');

Route::get('/upload-assets', [HomeController::class, 'upload_assets'])->name('upload-assets');
Route::post('/image-assets-store', [HomeController::class, 'image_assets_store'])->name('image-assets-store');

Route::get('/edit-assets/{id?}', [HomeController::class, 'edit_assets'])->name('edit-assets');

Route::get('/assets-list', [HomeController::class, 'assets_list'])->name('assets-list');
Route::post('update-assets/{id?}', [HomeController::class, 'update_assets'])->name('update_assets');
Route::get('/del-asset/{id?}', [HomeController::class, 'del_asset'])->name('del-asset');

Route::get('/manage-account', [HomeController::class, 'manage_account'])->name('manage-account');
Route::get('/manage-admin-account', [HomeController::class, 'manage_admin_account'])->name('manage-admin-account');

Route::post('update-user-info', [HomeController::class, 'updateUserInfo'])->name('update-user-info');

Route::get('/search-items', [HomeController::class, 'search_items'])->name('search-items');
Route::get('/users-list', [HomeController::class, 'users_list'])->name('users-list');
Route::get('/del-user/{id?}', [HomeController::class, 'del_user'])->name('del-user');

Route::post('/add-wallet-amount', [HomeController::class, 'addWalletAmount'])->name('add.wallet.amount');


});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/user-testing', [UserController::class, 'user_testing'])->name('user-testing');
    Route::get('/manage-account', [HomeController::class, 'manage_account'])->name('manage-account');

});

require __DIR__.'/auth.php';
