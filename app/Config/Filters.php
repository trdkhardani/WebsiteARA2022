<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;
use App\Filters\filter_admin;
use App\Filters\filter_user;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'filter_admin'  => filter_admin::class,
        'filter_user'   => filter_user::class
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            
            'filter_admin'  => [
                'except'    => ['', 'home', 'home/*', 'verify/*', 'auth/*', 'dashboard/User_webinar/*', 'dashboard/User_expo/*', 'dashboard/User_ctf/*', 'dashboard/User_olim/*', 'dashboard/User_kti_iot/*']
            ],
            
            'filter_user'   => [
                'except'    => ['', 'home', 'home/*', 'verify/*', 'auth/*', 'dashboard/Admin_webinar/*', 'dashboard/Admin_expo/*', 'dashboard/Admin_ctf/*', 'dashboard/Admin_olim/*', 'dashboard/Admin_kti_iot/*']
            ],
            // 'honeypot',
            // 'csrf',
            // 'invalidchars',
        ],
        'after' => [
            
            'filter_admin'  => [
                'except'    => ['', 'home', 'home/*', 'verify/verify_registrasi_kti', 'verify/verify_registrasi_ctf', 'verify/verify_registrasi_olim', 'verify/verify_registrasi_expo', 'verify/verify_registrasi_webinar', 'auth/registrasi_kti', 'auth/registrasi_ctf', 'auth/registrasi_olim', 'auth/registrasi_expo', 'auth/registrasi_webinar']
            ],
            
            'filter_user'   => [
                'except'    => ['', 'home', 'home/*', 'verify/verify_registrasi_kti', 'verify/verify_registrasi_ctf', 'verify/verify_registrasi_olim', 'verify/verify_registrasi_expo', 'verify/verify_registrasi_webinar', 'auth/registrasi_kti', 'auth/registrasi_ctf', 'auth/registrasi_olim', 'auth/registrasi_expo', 'auth/registrasi_webinar']
            ],
            'toolbar',
            // 'honeypot',
            // 'secureheaders',
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
