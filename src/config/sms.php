<?php
return [
    'driver' => env('SMS_DRIVER', 'null'),

    'default_sender' => env('SMS_DEFAULT_SENDER'),

    'kavenegar' => [
        'api_key' => env('KAVENEGAR_API_KEY'),
    ],
];
