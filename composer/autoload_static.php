<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit12e562e40674622125063f8cf454d09b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit12e562e40674622125063f8cf454d09b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit12e562e40674622125063f8cf454d09b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}