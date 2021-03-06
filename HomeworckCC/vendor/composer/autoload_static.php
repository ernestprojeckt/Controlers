<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit164d49b7093265cc53a3886fc55e3822
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
            'Components\\' => 11,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Components\\' => 
        array (
            0 => __DIR__ . '/../..' . '/components',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit164d49b7093265cc53a3886fc55e3822::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit164d49b7093265cc53a3886fc55e3822::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit164d49b7093265cc53a3886fc55e3822::$classMap;

        }, null, ClassLoader::class);
    }
}
