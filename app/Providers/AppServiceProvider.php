<?php

namespace App\Providers;

use App\Support\SiteSettings;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Throwable;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // utf8mb4 indexes: 255 chars = 1020 bytes, over MySQL's 1000-byte key limit
        Schema::defaultStringLength(191);

        View::composer(['layout.app', 'home', 'partials.header', 'partials.footer', 'partials.whatsapp-chat', 'pages.contact', 'pages.services', 'pages.quote'], function ($view): void {
            try {
                $view->with('site', SiteSettings::all());
                $view->with('siteLogoDesktop', SiteSettings::logoDesktopUrl());
                $view->with('siteLogoMobile', SiteSettings::logoMobileUrl());
                $view->with('sitePhoneTel', SiteSettings::phoneTel());
                $view->with('whatsappEnabled', SiteSettings::whatsappEnabled());
                $view->with('whatsappUrl', SiteSettings::whatsappUrl());
            } catch (Throwable) {
                $defaults = SiteSettings::defaults();
                $view->with('site', $defaults);
                $view->with('siteLogoDesktop', asset('images/sphere_logo.png'));
                $view->with('siteLogoMobile', asset('images/sphere_logo.png'));
                $view->with('sitePhoneTel', '+16043137091');
                $view->with('whatsappEnabled', false);
                $view->with('whatsappUrl', null);
            }
        });
    }
}
