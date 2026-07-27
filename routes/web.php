<?php

use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\user\AboutController;
use App\Http\Controllers\user\ContactController;
use App\Http\Controllers\user\ErrorsController;
use App\Http\Controllers\user\FAQSController;
use App\Http\Controllers\user\FeaturesController;
use App\Http\Controllers\user\OurTeamController;
use App\Http\Controllers\user\PricesController;
use App\Http\Controllers\user\QuoteController;
use App\Http\Controllers\user\TestimonialsController;
use App\Http\Controllers\user\ServicesController;
use App\Http\Controllers\user\ServicesDetailsController;
use App\Http\Controllers\user\ProjectsController;
use App\Http\Controllers\user\ProjectsDetailsController;
use App\Http\Controllers\user\ProjectsListController;
use App\Http\Controllers\user\ProjectsDetailsAltController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/faqs', [FAQSController::class, 'index'])->name('faqs');
Route::get('/features', [FeaturesController::class, 'index'])->name('features');
Route::get('/our-team', [OurTeamController::class, 'index'])->name('our-team');
Route::get('/prices', [PricesController::class, 'index'])->name('prices');
Route::get('/quote', [QuoteController::class, 'index'])->name('quote');
Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials');

Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/service-details', [ServicesDetailsController::class, 'index'])->name('service-details');

Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/project-details', [ProjectsDetailsController::class, 'index'])->name('project-details');

Route::get('/projects-list', [ProjectsListController::class, 'index'])->name('projects-list');
Route::get('/project-details-alt', [ProjectsDetailsAltController::class, 'index'])->name('project-details-alt');

Route::get('/404', [ErrorsController::class, 'index'])->name('errors.404');
