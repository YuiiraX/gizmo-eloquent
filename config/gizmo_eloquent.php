<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | This is the connection info for your Gizmo database, sql authentication
    | need to be turned on for this to work. I recommend setting permission so
    | that the DB user only read from the database since the database is
    | managed by the Gizmo Service.
    */

    'gizmos' => [
        'driver' => 'sqlsrv',
        'host' => env('GIZMOS_DB_HOST', 'localhost'),
        'port' => env('GIZMOS_DB_PORT', '1433'),
        'database' => env('GIZMOS_DB_DATABASE', 'forge'),
        'username' => env('GIZMOS_DB_USERNAME', 'forge'),
        'password' => env('GIZMOS_DB_PASSWORD', ''),
        'charset' => 'utf8',
        'prefix' => '',
        'options' => [
            PDO::SQLSRV_ATTR_FORMAT_DECIMALS => true,
        ]
    ],
];
