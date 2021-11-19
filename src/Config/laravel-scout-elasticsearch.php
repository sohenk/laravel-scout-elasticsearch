<?php

return [
    'elasticsearch' => [
        'prefix' => env('ELASTICSEARCH_PREFIX', 'laravel_'),
        'hosts'=>  [
            [
                'host'   =>  env('ELASTICSEARCH_HOST', '9200'),
                'port'   => env('ELASTICSEARCH_PORT', '9200'),
                'scheme' => env('ELASTICSEARCH_SCHEME', 'https'),
                'path'   => env('ELASTICSEARCH_PATH', ''),
                'user'   => env('ELASTICSEARCH_USER', 'username'),
                'pass'   => env('ELASTICSEARCH_PASS', 'password'),
            ],
        ],
        'analyzer' => env('ELASTICSEARCH_ANALYZER', 'ik_max_word'),
        'settings' => [],
        'filter' => [
            '+',
            '-',
            '&',
            '|',
            '!',
            '(',
            ')',
            '{',
            '}',
            '[',
            ']',
            '^',
            '\\',
            '"',
            '~',
            '*',
            '?',
            ':'
        ]
    ],
];
