<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe3b5f8ee0aecd5f8a2a56057e7caed4
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpPaymentGateway\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpPaymentGateway\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe3b5f8ee0aecd5f8a2a56057e7caed4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe3b5f8ee0aecd5f8a2a56057e7caed4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbe3b5f8ee0aecd5f8a2a56057e7caed4::$classMap;

        }, null, ClassLoader::class);
    }
}
