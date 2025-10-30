<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TestController;

use App\Http\Controllers\ActuController;
use App\Http\Controllers\PagesController;

Route::get('/', function () {

        $title = $title ?? 'Office National du Tourisme RDC - Explorez les merveilles du Congo';
        $metaTitle = $metaTitle ?? 'Office National du Tourisme RDC - Explorez les merveilles du Congo';
        $description = $description ?? 'Découvrez les destinations touristiques, la culture et les événements en République Démocratique du Congo avec l\'Office National du Tourisme RDC.';
        $robot = $robot ?? 'index, follow';
        $canonical = $canonical ?? 'https://www.officetourisme.cd/';
        $language = $language ?? 'fr';
        $author = $author ?? 'Office National du Tourisme RDC';
        $ogTitle = $ogTitle ?? 'Office National du Tourisme RDC - Explorez les merveilles du Congo';
        $ogDescription = $ogDescription ?? 'Découvrez les destinations touristiques, la culture et les événements en République Démocratique du Congo avec l\'Office National du Tourisme RDC.';
        $ogImage = $ogImage ?? asset('/images/logo_color_ont_paysage.png');
        $ogUrl = $ogUrl ?? url()->current();
        $ogType = $ogType ?? 'website';
        $ogSiteName = $ogSiteName ?? 'Office National du Tourisme RDC';
        $ogLocale = $ogLocale ?? 'fr_FR';
        $twitterTitle = $twitterTitle ?? 'Office National du Tourisme RDC - Explorez les merveilles du Congo';
        $twitterDescription = $twitterDescription ?? 'Découvrez les destinations touristiques, la culture et les événements en République Démocratique du Congo avec l\'Office National du Tourisme RDC.';
        $twitterImage = $twitterImage ?? asset('/images/logo_color_ont_paysage.png');
        $twitterCard = $twitterCard ?? 'summary_large_image';
        $twitterSite = $twitterSite ?? '@ONT_RDC';
        $twitterCreator = $twitterCreator ?? '@ONT_RDC';

    return view('welcome', compact('title',
                                        'metaTitle',
                                        'description',
                                        'robot',
                                        'canonical',
                                        'language',
                                        'author',
                                        'ogTitle',
                                        'ogDescription',
                                        'ogImage',
                                        'ogUrl',
                                        'ogType',
                                        'ogSiteName',
                                        'ogLocale',
                                        'twitterTitle',
                                        'twitterDescription',
                                        'twitterImage',
                                        'twitterCard',
                                        'twitterSite',
                                        'twitterCreator'));
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

// my route ========================


Route::get('test-dev', [TestController::class, 'add'])->name('route.test');

Route::get('article/{id}/{slug?}', [ActuController::class, 'show'])->name('article.route');
Route::get('articles/{slug?}', [ActuController::class, 'showAll'])->name('articles.route');
Route::get('pages-pages/{id}/{slug?}', [PagesController::class, 'show'])->name('page.route');
Route::get('pages/{id}/{slug?}', [PagesController::class, 'showSub'])->name('page.sub.route');


// my route ==========================

require __DIR__.'/auth.php';
