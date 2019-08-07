<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3", "rackspace"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'sd1video' => [
            'driver' => 'local',
            'root' => public_path() . '/upload/video/sd1',
        ],
        'sd1dokumen' => [
            'driver' => 'local',
            'root' => public_path() . '/upload/dokumen/sd1',
        ],
        'sd2dokumen' => [
            'driver' => 'local',
            'root' => public_path() . '/upload/dokumen/sd2',
        ],
        'sd3dokumen' => [
            'driver' => 'local',
            'root' => public_path() . '/upload/dokumen/sd3',
        ],
        'sd4dokumen' => [
            'driver' => 'local',
            'root' => public_path() . '/upload/dokumen/sd4',
        ],
        'sd5dokumen' => [
            'driver' => 'local',
            'root' => public_path() . '/upload/dokumen/sd5',
        ],
        'sd6dokumen' => [
            'driver' => 'local',
            'root' => public_path() . '/upload/dokumen/sd6',
        ],
        'smp1dokumen' => [
            'driver' => 'local',
            'root' => public_path() . '/upload/video/smp1',
        ],
        'smp2dokumen' => [
            'driver' => 'local',
            'root' => public_path() . '/upload/dokumen/smp2',
        ],
        'smp3dokumen' => [
            'driver' => 'local',
            'root' => public_path() . '/upload/dokumen/smp3',
        ],
        'sma1dokumen' => [
            'driver' => 'local',
            'root' => public_path() . '/upload/video/sma1',
        ],
        'sma2dokumen' => [
            'driver' => 'local',
            'root' => public_path() . '/upload/dokumen/sma2',
        ],
        'sma3dokumen' => [
            'driver' => 'local',
            'root' => public_path() . '/upload/dokumen/sma3',
        ],
        'saintek' => [
            'driver' => 'local',
            'root' => public_path() . '/upload/dokumen/saintek',
        ],
        'soshum' => [
            'driver' => 'local',
            'root' => public_path() . '/upload/dokumen/soshum',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
        ],

    ],

];
