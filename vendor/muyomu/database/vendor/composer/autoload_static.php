<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1cd602c080cbf63f82b96e2e7380b5eb
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'muyomu\\database\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'muyomu\\database\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1cd602c080cbf63f82b96e2e7380b5eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1cd602c080cbf63f82b96e2e7380b5eb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1cd602c080cbf63f82b96e2e7380b5eb::$classMap;

        }, null, ClassLoader::class);
    }
}
