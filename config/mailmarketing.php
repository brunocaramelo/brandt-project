<?php

return [
    'api_url' => env('MAILMARKETING_API', 'https://emailmarketing.locaweb.com.br/api/v1'),
    'consumer_token' => env('MAILMARKETING_API_TOKEN', ''),
    'account_id' => env('MAILMARKETING_API_ACCOUNT_ID', '165146'),
    'references' => [
        'defaultList' => [
            'id' => '1',
            'name' => 'sitePatricaabs',
        ],
    ],];
