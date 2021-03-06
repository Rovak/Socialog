<?php

return array(
    'modules' => array(
        // Doctrine
        'DoctrineModule',
        'DoctrineORMModule',
        'ZfcTwig',
        'RovakCodeMirror',
        'AssetManager',
        // Socialog
        'Socialog',
        'SocialogAdmin',
        'SocialogGithub',
        'SocialogAnalytics',
        'SocialogTumblr',
        'SocialogInstall',
        'SocialogCodeMirror',
        'SocialogDisqus',
    ),
    'module_listener_options' => array(
        // Module locations
        'module_paths' => array(
            './module',
            './vendor',
        ),
        // Configuration
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.{php,ini}',
        ),
//		'config_cache_enabled' => TRUE,
//		'cache_dir'			=> 'data/cache',
//		'config_cache_key'	=> 'production',
    ),
);
