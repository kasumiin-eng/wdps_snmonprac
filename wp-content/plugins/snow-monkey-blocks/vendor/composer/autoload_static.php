<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb405081ce179c8c2d3177cb8e47cf807
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Snow_Monkey\\Plugin\\Blocks\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Snow_Monkey\\Plugin\\Blocks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb405081ce179c8c2d3177cb8e47cf807::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb405081ce179c8c2d3177cb8e47cf807::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb405081ce179c8c2d3177cb8e47cf807::$classMap;

        }, null, ClassLoader::class);
    }
}