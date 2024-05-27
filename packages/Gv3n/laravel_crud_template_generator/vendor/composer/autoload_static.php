<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2377b29e2088015d30fe1cfd7b61b67b
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gv3N\\LaravelCrudTemplateGenerator\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gv3N\\LaravelCrudTemplateGenerator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2377b29e2088015d30fe1cfd7b61b67b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2377b29e2088015d30fe1cfd7b61b67b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2377b29e2088015d30fe1cfd7b61b67b::$classMap;

        }, null, ClassLoader::class);
    }
}