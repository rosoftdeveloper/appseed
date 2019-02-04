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
    ],

    // VIEWS PATH
    'view_path' => [
        'argon' => 'themes.argon.',
        'now-ui-kit-pro' => 'themes.now-ui-kit-pro.',
    ],

    // ASSETS PATH
    'assets' => [
        'argon' => '/themes/argon',
        'now-ui-kit-pro' => '/themes/now-ui-kit-pro',
    ],

];
