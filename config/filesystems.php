<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application for file storage.
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Below you may configure as many filesystem disks as necessary, and you
    | may even configure multiple disks for the same driver. Examples for
    | most supported storage drivers are configured here for reference.
    |
    | Supported drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        'group_badges' => [
            'driver' => 'local',
            'root' => env('NITRO_GROUP_BADGE_PATH'),
            'url' => env('NITRO_GROUP_BADGE_URL'),
            'visibility' => 'public',
            'throw' => false,
        ],

        'album1584' => [
            'driver' => 'local', 
            'root' => env('NITRO_BADGE_PATH'),
            'url' => env('NITRO_BADGE_URL'),
            'visibility' => 'public',
            'throw' => false,
        ],

        'room_backgrounds' => [
            'driver' => 'local',
            'root' => env('NITRO_BACKGROUND_PATH'),
            'url' => env('NITRO_BACKGROUND_URL'),
            'visibility' => 'public',
            'throw' => false,
        ],

        'catalog_images' => [
            'driver' => 'local',
            'root' => env('NITRO_CATALOG_IMAGE_PATH'),
            'url' => env('NITRO_CATALOG_IMAGE_URL'),
            'visibility' => 'public',
            'throw' => false,
        ],
        'furniture_icons' => [
            'driver' => 'local',
            'root' => env('NITRO_FURNITURE_ICON_PATH'),
            'url' => env('NITRO_FURNITURE_ICON_URL'),
            'visibility' => 'public',
            'throw' => false,
        ],
        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
