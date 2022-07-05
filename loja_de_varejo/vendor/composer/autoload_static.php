<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit358ae71abc6efebfba04bdb008c9c54d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'APP\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit358ae71abc6efebfba04bdb008c9c54d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit358ae71abc6efebfba04bdb008c9c54d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit358ae71abc6efebfba04bdb008c9c54d::$classMap;

        }, null, ClassLoader::class);
    }
}
