<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\ImageController;
use App\Http\Controllers\EventController;

use App\Http\Controllers\NewsController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\VideoController;

Route::get('/web/leadership', [HomeController::class, 'leadership'])->name('leadership');
Route::get('/web', [HomeController::class, 'welcome'])->name('welcome');

Route::get('/web/manifesto', [HomeController::class, 'manifesto_page'])->name('manifesto_page');

Route::get('/web/manifesto_2025', [HomeController::class, 'manifesto_generic'])->name('manifesto_generic');


Route::get('/web/full_history', function () {
    return view('partials.full_history');
})->name('full_history');

Route::get('/web/about', function () {
    return view('frontend.components.about');
})->name('about');

Route::get('/web/apm', function () {
    return view('frontend.components.apm');
})->name('apm');

Route::get('/web/videos', [VideoController::class, 'index'])->name('videos');
Route::post('/videos/track-view', [VideoController::class, 'trackView'])->name('videos.trackView');
Route::post('/videos/track-download', [VideoController::class, 'trackDownload'])->name('videos.trackDownload');
Route::get('/web/videos/download/{filename}', [VideoController::class, 'download'])->name('videos.download');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

//Route::prefix('admin')->middleware('auth', 'is_admin')->group(function () {
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/activity', [AdminController::class, 'activity'])->name('admin.activity');
    Route::get('/uploads', [AdminController::class, 'uploads'])->name('admin.uploads');
    Route::get('/admin_news', [AdminController::class, 'news'])->name('admin.news');
    Route::get('/enquiries', [AdminController::class, 'enquiries'])->name('admin.emails');
    Route::get('/transactions', [AdminController::class, 'transactions'])->name('admin.transactions');
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');

    // news
    Route::resource('news', NewsController::class);
    //music
    Route::resource('music', MusicController::class);
    // images
    Route::resource('images', ImageController::class);
    // events 
    Route::resource('events', EventController::class);
});
// Home Controllers methods 
Route::get('/web/membership', [HomeController::class, 'membership'])->name('membership');
Route::get('/web/loadingscreen', [HomeController::class, 'loadingscreen'])->name('loading-screen');
Route::get('/web/contacts', [HomeController::class, 'contacts'])->name('contact');
Route::get('/web/musics', [HomeController::class, 'music'])->name('music');
Route::post('/music/track-play', [HomeController::class, 'trackMusicPlay'])->name('music.trackPlay');
Route::post('/music/track-download', [HomeController::class, 'trackMusicDownload'])->name('music.trackDownload');
Route::get('/web/music/download/{id}', [HomeController::class, 'downloadMusic'])->name('music.download');
Route::get('/web/dpp_events', [HomeController::class, 'events'])->name('events');
Route::get('/web/dpp_news', [HomeController::class, 'news'])->name('news');
Route::get('/web/news_detail/{id}', [HomeController::class, 'news_detail'])->name('news_detail');
Route::get('/web/donate', [HomeController::class, 'donate'])->name('donate');
Route::get('/web/policies', [HomeController::class, 'policies'])->name('policies');
Route::get('/web/codes_of_conduct', [HomeController::class, 'code_of_conduct'])->name('code_of_conduct');
Route::get('/web/manifesto2019', [HomeController::class, 'manifesto2019'])->name('manifesto2019');
Route::get('/web/manifesto2025', [HomeController::class, 'manifesto2025'])->name('manifesto2025');
Route::get('/web/volunteer', [HomeController::class, 'volunteer'])->name('volunteer');



// partials

Route::get('/partials/footer', function () {
    return view('partials.footer');
});

Route::get('/partials/history', function () {
    return view('partials.history');
});

// ThemeController

Route::post('/toggle-theme', [ThemeController::class, 'toggle'])->name('toggle.theme');
