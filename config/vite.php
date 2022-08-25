<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Configurations
    |--------------------------------------------------------------------------
    | The following describes a set of configurations that can be used
    | independently. Because Vite does not support generating multiple
    | bundles, using separate configuration files is necessary.
    */
    'configs' => [
        'default' => [
            'entrypoints' => [
                'ssr' => 'resources/scripts/ssr.ts',
                'paths' => [
                    'resources/scripts/main.ts',
                    'resources/js/app.js',
                ],
                'ignore' => '/\\.(d\\.ts|json)$/',
            ],
            'dev_server' => [
                'enabled' => true,
                'url' => env('DEV_SERVER_URL', 'http://localhost:5173'),
                'ping_before_using_manifest' => true,
                'ping_url' => null,
                'ping_timeout' => 1,
                'key' => env('DEV_SERVER_KEY'),
                'cert' => env('DEV_SERVER_CERT'),
            ],
            'build_path' => 'build',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Aliases
    |--------------------------------------------------------------------------
    | You can define aliases to avoid having to make relative imports.
    | Aliases will be written to tsconfig.json automatically so your IDE
    | can know how to resolve them.
    */
    'aliases' => [
        '@' => 'resources',
    ],

    /*
    |--------------------------------------------------------------------------
    | Commands
    |--------------------------------------------------------------------------
    | Before starting the development server or building the assets, you
    | may need to run specific commands. With these options, you can
    | define what to run, automatically.
    */
    'commands' => [
        'artisan' => [
            'vite:tsconfig',
            // 'typescript:generate'
        ],
        'shell' => [
            //
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Testing
    |--------------------------------------------------------------------------
    | Depending on the way you are testing your application,
    | you may or may not need to use the manifest. This option controls
    | the manifest should be used in the "testing" environment.
    */
    'testing' => [
        'use_manifest' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Environment variable prefixes
    |--------------------------------------------------------------------------
    | This option defines the prefixes that environment variables must
    | have in order to be accessible from the front-end.
    */
    'env_prefixes' => ['VITE_', 'MIX_', 'SCRIPT_'],

    /*
    |--------------------------------------------------------------------------
    | Default interfaces
    |--------------------------------------------------------------------------
    | Here you may change how some parts of the package work by replacing
    | their associated logic.
    */
    'interfaces' => [
        'heartbeat_checker' => Irujimee\Vite\HeartbeatCheckers\HttpHeartbeatChecker::class,
        'tag_generator' => Irujimee\Vite\TagGenerators\CallbackTagGenerator::class,
        'entrypoints_finder' => Irujimee\Vite\EntrypointsFinder\DefaultEntrypointsFinder::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Default configuration
    |--------------------------------------------------------------------------
    | Here you may specify which of the configurations above you wish
    | to use as your default one.
    */
    'default' => env('VITE_DEFAULT_CONFIG', 'default'),
];
