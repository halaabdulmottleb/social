<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

'facebook' => [
    'client_id' => '2709518735933737',
    'client_secret' => '58b0ebf7a7cd71f8517b982f80b0e935',
    'redirect' => 'http://localhost:8000/auth/facebook/callback',
  ],

'instagram' => [  

    'client_id'     => '606342090244329',
    'client_secret' => '222a03a1e925cd8519d694f0fee775db',
    'redirect_uri'  => 'http://localhost:8000/login/instagram/callback',
    'scopes'        => 'basic public_content' 

],

];
