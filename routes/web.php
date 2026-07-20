<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/faqs', 'pages.faqs')->name('faqs');
Route::view('/features', 'pages.features')->name('features');
Route::view('/our-team', 'pages.our-team')->name('our-team');
Route::view('/prices', 'pages.prices')->name('prices');
Route::view('/quote', 'pages.quote')->name('quote');
Route::view('/testimonials', 'pages.testimonials')->name('testimonials');

Route::view('/services', 'pages.services')->name('services');
Route::view('/service-details', 'pages.service-details')->name('service-details');

Route::view('/projects', 'pages.projects')->name('projects');
Route::view('/project-details', 'pages.project-details')->name('project-details');

Route::view('/projects-list', 'pages.projects-list')->name('projects-list');
Route::view('/project-details-alt', 'pages.project-details-alt')->name('project-details-alt');

Route::view('/404', 'pages.errors-404')->name('errors.404');
