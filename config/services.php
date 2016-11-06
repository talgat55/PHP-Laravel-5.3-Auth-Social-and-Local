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
   'linkedin' => [
		'client_id' => '*******',
		'client_secret' => '*******',
		'redirect' => 'http://localhost/laravel_social/linkedin/callback'
	],
 
	'twitter' => [
		'client_id' => '*********',
		'client_secret' => '********',
		'redirect' => 'http://127.0.0.1/laravel_social/twitter/callback'
	],   
 
	'google' => [
		'client_id' => '1023060785086-c0hi67edsv4or6fghvj0cnkvmearnb22.apps.googleusercontent.com',
		'client_secret' => 'PzNF1qEwYZ8FzQmCZj-lQRrB',
		'redirect' => 'http://localhost/:8000/google/callback'
	],
 
	'facebook' => [
		'client_id' => '**************',
		'client_secret' => '***********',
		'redirect' => 'http://localhost/laravel_social/facebook/callback'
	],
];
