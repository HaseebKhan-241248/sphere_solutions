<?php

return [

    'currency' => env('STRIPE_CURRENCY', 'usd'),

    /*
    |--------------------------------------------------------------------------
    | Package Plans
    |--------------------------------------------------------------------------
    |
    | Optional Stripe Price IDs (price_xxx) can be set per package in .env.
    | When empty, Checkout creates a one-time price from amount_cents.
    |
    */

    'plans' => [

        'basic' => [
            'name' => 'Basic Package',
            'tagline' => 'Small businesses or startups testing the waters in digital marketing',
            'amount_cents' => 15000,
            'stripe_price_id' => env('STRIPE_PRICE_BASIC'),
            'featured' => false,
            'checkout' => true,
            'features' => [
                'Social Media Management (1 platform)',
                'Basic SEO Optimization (keyword research, meta tags)',
                'Blog Posts / Articles per month',
                'Increasing DAPA with 150 backlinks Guaranteed',
                'Monthly Performance Report',
                'Website Audit Report',
                'Create 1 promotional video (video editing included)',
            ],
            'notes' => [
                'Domain and Hosting to be provided by the customer',
                'Package Customization can be made based on your business requirements.',
            ],
        ],

        'standard' => [
            'name' => 'Standard Package',
            'tagline' => 'Growing businesses aiming to increase visibility and customer engagement',
            'amount_cents' => 30000,
            'stripe_price_id' => env('STRIPE_PRICE_STANDARD'),
            'featured' => true,
            'checkout' => true,
            'features' => [
                'Social Media Management (3 platforms of your choice)',
                'Basic SEO Optimization (keyword research, meta tags)',
                'Blog Posts / Articles per month',
                'Increasing DAPA with 400 backlinks Guaranteed',
                'Monthly Performance Report',
                'Website Audit Report',
                'Create 2 promotional videos (video editing included)',
            ],
            'notes' => [
                'Domain and Hosting to be provided by the customer',
                'Package Customization can be made based on your business requirements.',
            ],
        ],

        'premium' => [
            'name' => 'Premium Package',
            'tagline' => 'Established businesses focused on scaling and driving significant growth',
            'amount_cents' => 50000,
            'stripe_price_id' => env('STRIPE_PRICE_PREMIUM'),
            'featured' => false,
            'checkout' => true,
            'features' => [
                'Social Media Management (5 platforms of your choice)',
                'Advanced SEO Optimization (keyword research, meta tags)',
                'Blog Posts / Articles per month',
                'Increasing DAPA with 400 backlinks + weekly performance reports',
                'Monthly Performance Report',
                'Website Audit Report',
                'Create 5 promotional videos (video editing included)',
            ],
            'notes' => [
                'Domain and Hosting to be provided by the customer',
                'Package Customization can be made based on your business requirements.',
            ],
        ],

        'platinum' => [
            'name' => 'Platinum Package',
            'tagline' => 'Established businesses focused on scaling and making a digital impact',
            'amount_cents' => 70000,
            'stripe_price_id' => env('STRIPE_PRICE_PLATINUM'),
            'featured' => false,
            'checkout' => true,
            'features' => [
                'Social Media and Campaign Management',
                'Advanced SEO Optimization (keyword research, meta tags)',
                'Blog Posts / Articles per month',
                'Increasing DAPA with 600 backlinks Guaranteed',
                'Monthly Performance Report',
                'Website Audit Report',
                'Create 5 promotional videos (video editing included)',
            ],
            'notes' => [
                'Domain and Hosting to be provided by the customer',
                'Package Customization can be made based on your business requirements.',
            ],
        ],

        'enterprise' => [
            'name' => 'Enterprise Package',
            'tagline' => 'Enterprises with a need for a custom, data-driven marketing approach',
            'amount_cents' => null,
            'stripe_price_id' => null,
            'featured' => false,
            'checkout' => false,
            'price_label' => 'Custom — depending on industry & complexity',
            'features' => [
                'Website Development',
                'Social Media Management',
                'Advanced SEO Optimization',
                'Google Ads Management',
                'Conversion Rate Optimization',
                'Video Editing and Content Creation (custom video, infographics, eBooks)',
                'Blog Posts / Articles',
                'Monthly Performance Report',
                'Website Audit Report',
            ],
            'notes' => [],
        ],

    ],

];
