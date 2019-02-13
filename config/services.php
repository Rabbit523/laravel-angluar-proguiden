<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
        'client_id' => env('GOOGLE_ID', '487900139768-td5q7a33iotinedk26s91m48hic0aob9.apps.googleusercontent.com'),
        'client_secret' => env('GOOGLE_SECRET', 'ETr2uRaWpyfWfFdJ1fRx1_tX'),
        'redirect' => env('GOOGLE_REDIRECT', 'https://proguiden.fantasylab.no/auth/google/callback'),
    ],

    'facebook' => [
        'client_id' => env('FACEBOOK_ID', '556901558094670'),
        'client_secret' => env('FACEBOOK_SECRET', '5afd0b03c3f968368983feb786dbbb25'),
        'redirect' => env('FACEBOOK_REDIRECT', 'https://proguiden.fantasylab.no/auth/facebook/callback'),
    ],
];
