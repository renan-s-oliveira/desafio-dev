<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit38ae3d323dd528451548c0445ce6800d
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Renan\\LeitorCnabDesafio\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Renan\\LeitorCnabDesafio\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit38ae3d323dd528451548c0445ce6800d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit38ae3d323dd528451548c0445ce6800d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit38ae3d323dd528451548c0445ce6800d::$classMap;

        }, null, ClassLoader::class);
    }
}