<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PortfolioController;

    Route::prefix('')->group(function () {
        Route::controller(HomeController::class)->group(function () {
            Route::get('/','index')->name('index');
            Route::get('/index-2','index2')->name('index2');
            Route::get('about', 'about')->name('about');
            Route::get('contact', 'contact')->name('contact');
        });
    });

    Route::prefix('news')->group(function () {
        Route::controller(NewsController::class)->group(function () {
            Route::get('/blog','blog')->name('blog');
            Route::get('/blog-details','blogDetails')->name('blogDetails');
        });
    });

    Route::prefix('pages')->group(function () {
        Route::controller(PagesController::class)->group(function () {
            Route::get('/page-error','pageError')->name('pageError');
            Route::get('/faq','faq')->name('faq');
            Route::get('/history','history')->name('history');
            route::get('/service-details/structural-design','serviceDetails')->name ('serviceDetails');
            route::get('/service-details/architecture-design','serviceDetails2')->name ('serviceDetails2');
            route::get('/service-details/consulting','serviceDetails3')->name ('serviceDetails3');
            route::get('/service-details/mep-engineering','serviceDetails4')->name ('serviceDetails4');
            route::get('/services','services')->name ('services');
            route::get('/services-two','servicesTwo')->name ('servicesTwo');
            route::get('/team-details/abdurahman','teamDetails')->name ('teamDetails');
            route::get('/team-details/nedim','teamDetails2')->name ('teamDetails2');
            route::get('/team-details/zlata','teamDetails3')->name ('teamDetails3');
            route::get('/team-details/amila','teamDetails4')->name ('teamDetails4');
        });
    });

    Route::prefix('portfolio')->group(function () {
        Route::controller(PortfolioController::class)->group(function () {
            Route::get('/portfolio-1','portfolio1')->name('portfolio1');
            Route::get('/portfolio-2','portfolio2')->name('portfolio2');
            Route::get('/portfolio-3','portfolio3')->name('portfolio3');
            Route::get('/portfolio-details','portfolioDetails')->name('portfolioDetails');
        });
    });
