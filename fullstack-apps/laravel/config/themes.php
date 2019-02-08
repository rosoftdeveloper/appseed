<?php

return [
    /*
    |--------------------------------------------------------------------------
    | THEMES View Storage Paths
    |--------------------------------------------------------------------------
    |
    */

    // DEFAULT THEME ( set in .env APP_THEME your default theme )
    'default_theme' => 'argon',

    // AVAILABLE THEMES
    'available_themes' => [
        'argon',
        'now-ui-kit-pro',
        'argon-dashboard',
    ],

    // VIEWS PATH
    'view_path' => [
        'argon' => 'themes.argon.',
        'now-ui-kit-pro' => 'themes.now-ui-kit-pro.',
        'argon-dashboard' => 'themes.argon-dashboard.',
    ],

    // ASSETS PATH
    'assets' => [
        'argon' => '/themes/argon',
        'now-ui-kit-pro' => '/themes/now-ui-kit-pro',
        'argon-dashboard' => '/themes/argon-dashboard',
    ],

    // THEME PAGES - EXCEPT AUTH
    'pages' => [
        'argon' => [
            'index' => '/',
        ],
        'now-ui-kit-pro' => [
            'index' => '/',
        ],
        'argon-dashboard' => [
            'index' => '/',
            'icons' => '/icons',
        ],
    ],
];
