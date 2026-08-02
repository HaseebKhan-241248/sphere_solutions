<?php

use App\Http\Controllers\user\AboutController;
use App\Http\Controllers\user\BlogController;
use App\Http\Controllers\user\CheckoutController;
use App\Http\Controllers\user\ContactController;
use App\Http\Controllers\user\ErrorsController;
use App\Http\Controllers\user\FAQSController;
use App\Http\Controllers\user\FeaturesController;
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\user\NewsletterController;
use App\Http\Controllers\user\OurTeamController;
use App\Http\Controllers\user\PricesController;
use App\Http\Controllers\user\PrivacyPolicyController;
use App\Http\Controllers\user\ProjectsController;
use App\Http\Controllers\user\ProjectsDetailsAltController;
use App\Http\Controllers\user\ProjectsDetailsController;
use App\Http\Controllers\user\ProjectsListController;
use App\Http\Controllers\user\QuoteController;
use App\Http\Controllers\user\RefundPolicyController;
use App\Http\Controllers\user\ServicesController;
use App\Http\Controllers\user\ServicesDetailsController;
use App\Http\Controllers\user\TermsConditionsController;
use App\Http\Controllers\user\TestimonialsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', [AboutController::class, 'index'])->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])->name('privacy-policy');
Route::get('/terms-conditions', [TermsConditionsController::class, 'index'])->name('terms-conditions');
Route::get('/refund-policy', [RefundPolicyController::class, 'index'])->name('refund-policy');
Route::get('/faqs', [FAQSController::class, 'index'])->name('faqs');
Route::get('/features', [FeaturesController::class, 'index'])->name('features');
Route::get('/our-team', [OurTeamController::class, 'index'])->name('our-team');
Route::get('/packages', [PricesController::class, 'index'])->name('prices');
Route::post('/checkout/{package}', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
Route::get('/checkout/cancel', [CheckoutController::class, 'cancel'])->name('checkout.cancel');
Route::get('/quote', [QuoteController::class, 'index'])->name('quote');
Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials');

Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/service-details', [ServicesDetailsController::class, 'index'])->name('service-details');

Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/project-details', [ProjectsDetailsController::class, 'index'])->name('project-details');

Route::get('/projects-list', [ProjectsListController::class, 'index'])->name('projects-list');
Route::get('/project-details-alt', [ProjectsDetailsAltController::class, 'index'])->name('project-details-alt');

Route::get('/404', [ErrorsController::class, 'index'])->name('errors.404');
