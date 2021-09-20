<?php

namespace Config;

use App\Filters\FilterAdmin;
use App\Filters\FilterUser;
use App\Filters\AuthFilter;
use App\Filters\Cors;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf'     => CSRF::class,
        'toolbar'  => DebugToolbar::class,
        'honeypot' => Honeypot::class,
        'filteradmin' => FilterAdmin::class,
        'filteruser' => FilterUser::class,
        'filterauth' => AuthFilter::class,
        'cors'       => Cors::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            'filteradmin' => [
                'except' => [
                    'auth', 'auth/*',
                    'member', 'member/*',
                    '/',
                ]
            ],
            'filteruser' => [
                'except' => [
                    'auth', 'auth/*',
                    'member', 'member/*',
                    '/',
                ]
            ],
            'filterauth' => [
                'except' => [
                    'auth', 'auth/*',
                    'member', 'member/*',
                    '/',
                ]
            ],
            'cors'
            // 'honeypot',
            // 'csrf',
        ],
        'after' => [
            'filteradmin' => [
                'except' => [
                    'admin', 'admin/*',
                    'member', 'member/*',
                ]
            ],
            'filteruser' => [
                'except' => [
                    'user', 'user/*',
                    'member', 'member/*',
                ]
            ],
            'filterauth' => [
                'except' => [
                    'auth', 'auth/*',
                    'member', 'member/*',
                ]
            ],
            'toolbar',
            // 'honeypot',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['csrf', 'throttle']
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [];
}
