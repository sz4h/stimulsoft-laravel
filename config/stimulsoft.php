<?php

// config for Space/Stimulsoft
return [
    // Key or file for the license
    'license' => [
        'key' => env('STIMULSOFT_KEY',null),
        /*
         * Example: license.key
         */
        'file' => env('STIMULSOFT_FILE',null),
    ],

    'viewer' => [
        'options' => [
            /*
             * More at https://www.stimulsoft.com/en/documentation/online/programming-manual/index.html?reports_and_dashboards_for_php_settings.htm
             */
            // Enable full screen mode
            'fullScreenMode' => true,
            // Enable Scrollbar mode
            'scrollbarsMode' => true,
            // Height for non-fullscreen mode
            'height' => '600px',
        ]
    ]
];
