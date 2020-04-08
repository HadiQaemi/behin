<?php

return [
    'flatrate' => [
        'code'         => 'flatrate',
        'title'        => 'flat-rate',
        'description'  => 'Flat Rate Shipping',
        'active'       => true,
        'default_rate' => '10',
        'type'         => 'per_unit',
        'class'        => 'Webkul\Shipping\Carriers\FlatRate',
    ],

    'free'     => [
        'code'         => 'free',
        'title'        => 'free-shipping',
        'description'  => 'Free Shipping',
        'active'       => true,
        'default_rate' => '0',
        'class'        => 'Webkul\Shipping\Carriers\Free',
    ]
];
