<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array<string, class-string|list<class-string>> [filter_name => classname]
     *                                                     or [filter_name => [classname1, classname2, ...]]
     */
    public array $aliases = [
        'csrf'              => CSRF::class,
        'toolbar'           => DebugToolbar::class,
        'honeypot'          => Honeypot::class,
        'invalidchars'      => InvalidChars::class,
        'secureheaders'     => SecureHeaders::class,
        'filterAdmin'       => \App\Filters\FilterAdmin::class,
        'filterKurir'       => \App\Filters\FilterKurir::class,
        'filterPelanggan'   => \App\Filters\FilterPelanggan::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array<string, array<string, array<string, string>>>|array<string, list<string>>
     */
    public array $globals = [
        'before' => [
            // 'honeypot',
            // 'csrf',
            // 'invalidchars',
            'filterAdmin' => [
                'except' => [
                    '/', '/login', '/cekUser', '/loginPelanggan', '/cekUserPelanggan', '/registrasi', '/registrasiSimpan',
                ]
            ],
            'filterKurir' => [
                'except' => [
                    '/', '/login', '/cekUser', '/loginPelanggan', '/cekUserPelanggan', '/registrasi', '/registrasiSimpan',
                ]
            ],
            'filterPelanggan' => [
                'except' => [
                    '/', '/login', '/cekUser', '/loginPelanggan', '/cekUserPelanggan', '/registrasi', '/registrasiSimpan',
                ]
            ],
        ],
        'after' => [
            'toolbar',
            // 'honeypot',
            // 'secureheaders',
            'filterAdmin' => [
                'except' => [
                    '/', '/login', '/cekUser', '/main', '/loginPelanggan', '/cekUserPelanggan', '/registrasi', '/registrasiSimpan',
                    '/level', '/formTambahLevel', '/formTambahLevelSimpan', '/formLevelEdit/*', '/formEditLevelSimpan', '/levelHapus/*',
                    '/user',  '/formTambahUser', '/formTambahUserSimpan', '/formUserEdit/*', '/formEditUserSimpan', '/userHapus/*',
                    '/menumakanan',  '/formTambahMenu', '/formTambahMenuSimpan', '/formMenuEdit/*', '/formEditMenuSimpan', '/menuHapus/*',
                    '/pesanan',
                    '/pengantaran',
                ]
            ],
            'filterKurir' => [
                'except' => [
                    '/', '/login', '/cekUser', '/loginPelanggan', '/cekUserPelanggan', '/registrasi', '/registrasiSimpan',
                ]
            ],
            'filterPelanggan' => [
                'except' => [
                    '/', '/login', '/cekUser', '/loginPelanggan', '/cekUserPelanggan', '/registrasi', '/registrasiSimpan',
                ]
            ],
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['foo', 'bar']
     *
     * If you use this, you should disable auto-routing because auto-routing
     * permits any HTTP method to access a controller. Accessing the controller
     * with a method you don't expect could bypass the filter.
     */
    public array $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     */
    public array $filters = [];
}
