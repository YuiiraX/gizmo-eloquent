<?php

use Illuminate\Support\Str;

return [
    'gizmos' => [
        'driver'   => 'sqlsrv',
        'host'     => env('GIZMOS_DB_HOST', 'localhost'),
        'port'     => env('GIZMOS_DB_PORT', '1433'),
        'database' => env('GIZMOS_DB_DATABASE', 'forge'),
        'username' => env('GIZMOS_DB_USERNAME', 'forge'),
        'password' => env('GIZMOS_DB_PASSWORD', ''),
        'charset'  => 'utf8',
        'prefix'   => '',
        'options'  => [
            PDO::SQLSRV_ATTR_FORMAT_DECIMALS => true,
        ],
    ],
];
