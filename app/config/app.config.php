<?php

return [
    // Contains environment specific variables such as usernames and passwords that you do not want to commit to VCS.
    'environment' => file_exists(__DIR__ . '/env.config.php') ? include __DIR__ . '/env.config.php' : [],

    // This setting contains the glob pattern (http://us2.php.net/glob) used to determine which files to load
    // to override the default configuration. This is useful for configuring different environments (development,
    // staging, production, etc.). By default this pattern loads app/config/override/*.config.php files.
    'override_pattern' => 'app/config/override/*.config.php',

    // The flags used when calling glob with the override_pattern above. In general you should not need to modify this.
    'override_flags' => 0,

    // A list of packages to load. Order is important! Generally you're application should be loaded last so that
    // it can override any other package.
    'packages' => [
        'application'
    ]
];
