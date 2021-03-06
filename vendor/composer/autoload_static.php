<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc197d3ff614bd6d854f616ff85d33977
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Flower\\Rose\\' => 12,
            'Flower\\Lily\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Flower\\Rose\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Flower/Rose',
        ),
        'Flower\\Lily\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Flower/Lily',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc197d3ff614bd6d854f616ff85d33977::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc197d3ff614bd6d854f616ff85d33977::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
