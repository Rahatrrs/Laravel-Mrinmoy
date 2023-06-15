<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ProfileController;
use \App\Http\Controllers\BlogController;
use \App\Http\Controllers\ReplyController;
use \App\Http\Controllers\GalleryController;
use \App\Http\Controllers\ContactController;
use \App\Http\Controllers\NewsLetter;
use \App\Models\User;
use \App\Models\Slider;
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
// Frontend routes
Route::get('/', function () {
    
    return view('home' );
});


Route::get('/education', function () {
    return view('pages.education');
});
Route::get('/medal', function () {
    return view('pages.medal');
});

Route::get('/tree-plantation', function () {
    return view('pages.tree');
});
Route::get('/eid', function () {
    return view('pages.eid');
});
Route::get('/human-for-human', function () {
    return view('pages.human');
});
Route::get('/comitee', function () {
    return view('pages.comitee');
});
Route::get('/team', function () {
    return view('pages.team');
});
Route::get('/all-blog', function () {
    
    return view('pages.all_blog');
});
Route::get('/gallery', function () {
    return view('pages.gallery');
});
Route::get('/contact-us', function () {
    return view('pages.contact');
});






// Admin Routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $user = User::all();
        return view('admin.index', compact('user'));
    })->name('dashboard');
});











// No More Registration
// Protected routes
Route::get('/admin', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.login');
})->name('register');
// Protected routes
// No More Registration















// Logout
Route::get('user/logout/', [HomeController::class, 'userLogout'] )->name('user.logout');

// Profile  Settings
Route::get('user/profile/', [ProfileController::class, 'userProfile'] )->name('user.profile')->middleware('auth');
Route::post('profile/update/', [ProfileController::class, 'updateProfile'])->name('profile.update')->middleware('auth');
Route::get('remove/picture/', [ProfileController::class, 'removePicture'])->name('remove.picture')->middleware('auth');
Route::get('user/password/', [ProfileController::class, 'changePassword'])->name('change.password')->middleware('auth');
Route::post('password/update/', [ProfileController::class, 'updatePassword'])->name('password.update')->middleware('auth');




// Brand
Route::get('/slider', [HomeController::class, 'allSlider'])->name('slider')->middleware('auth');
Route::post('/slider/add', [HomeController::class, 'addSlider'])->middleware('auth');
Route::get('/slider/edit/{id}', [HomeController::class, 'editSlider'])->middleware('auth');
Route::post('/slider/update/{id}', [HomeController::class, 'updateSlider'])->middleware('auth');
Route::get('/slider/delete/{id}', [HomeController::class, 'deleteSlider'])->middleware('auth');


// Blog
Route::get('/blog', [BlogController::class, 'allBlogs'])->name('blog')->middleware('auth');
Route::get('/blog/add', [BlogController::class, 'addBlog'])->name('blog.add')->middleware('auth');
Route::post('/store/blog/', [BlogController::class, 'storeBlog'])->name('store.blog')->middleware('auth');
Route::get('/blog/delete/{id}', [BlogController::class, 'deleteBlog'])->middleware('auth');
Route::get('/blog/edit/{id}', [BlogController::class, 'editblog'])->middleware('auth');
Route::post('/blog/update/{id}', [BlogController::class, 'updateBlog'])->middleware('auth');

// READ
Route::get('/blog/details/{id}', [BlogController::class, 'readBlog']);
// READ

// Send Reply
Route::post('/send/reply/{id}', [ReplyController::class, 'sendReply']);
Route::get('/all/reply/', [ReplyController::class, 'allReply'])->name('reply');
Route::get('/reply/delete/{id}', [ReplyController::class, 'deleteReply']);
// Send Reply




// Gallerry
Route::get('/gallery/admin', [GalleryController::class, 'adminGallery'])->name('admin.gallery')->middleware('auth');
Route::post('/gallery/add', [GalleryController::class, 'addGallery'])->middleware('auth');
Route::get('/gallery/delete/{id}', [GalleryController::class, 'deleteGallery'])->middleware('auth');


// Cotact Us
Route::post('/contact/message', [ContactController::class, 'sendMessage']);
Route::get('/user/message', [ContactController::class, 'userMessage'])->name('user.message')->middleware('auth');
Route::get('message/delete/{id}', [ContactController::class, 'deleteMessage'])->middleware('auth');

Route::get('/contact/information', [ContactController::class, 'contactInfo'])->name('contact.information')->middleware('auth');
Route::post('/info/add', [ContactController::class, 'addInfo'])->middleware('auth');
Route::get('/info/edit/{id}', [ContactController::class, 'editInfo'])->middleware('auth');
Route::post('info/update/{id}', [ContactController::class, 'updateInfo'])->middleware('auth');

// Cotact Us


// Newsletter
Route::post('send/mail/', [ContactController::class, 'newsLetter']);
Route::get('all/mail/', [ContactController::class, 'allNewsLetter'])->name('admin.newsLetter')->middleware('auth');
Route::get('newsletter/delete/{id}', [ContactController::class, 'deleteNewsLetter'])->middleware('auth');

// Newsletter


// Home Gallery
Route::get('home/gallery/', [HomeController::class, 'homeGallery'])->name('home.gallery')->middleware('auth');
Route::get('add/home_gallery/', [HomeController::class, 'addHomeGallery'])->name('home_gallery.add')->middleware('auth');
Route::post('store/home_gallery/', [HomeController::class, 'storeHomeGallery'])->name('store.home_gallery')->middleware('auth');
Route::get('home_gallery/edit/{id}', [HomeController::class, 'editHomeGallery'])->middleware('auth');
Route::post('home_gallery/update/{id}', [HomeController::class, 'updateHomeGallery'])->middleware('auth');
Route::get('home_gallery/delete/{id}', [HomeController::class, 'deleteHomeGallery'])->middleware('auth');

// Home Gallery


// Search
Route::get('/blogs/search', [HomeController::class, 'search'])->name('blogs.search');
// Search

