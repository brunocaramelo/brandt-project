<?php

return [
    'url' => env('WC_ORIGIN_API', ''),
    'consumer_key' => env('WC_CONSUMER_KEY', ''),
    'consumer_secret' => env('WC_CONSUMER_SECRET', ''),
    'references' => ['categories' => [
        'relevants_products' => '24',
        'new_products' => '23',
        'online_products' => '17',
        'presential_products' => '18',
    ]],

];
