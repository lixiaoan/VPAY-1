<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4ed42fd4895b44d71d2cc6fbdfc757b3
{
    public static $files = array (
        '33197a0023ced5fbf8f861d1c4ca048d' => __DIR__ . '/..' . '/topthink/think-orm/src/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\' => 6,
        ),
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-orm/src',
        ),
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4ed42fd4895b44d71d2cc6fbdfc757b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4ed42fd4895b44d71d2cc6fbdfc757b3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
