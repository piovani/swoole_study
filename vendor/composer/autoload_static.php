<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite25ba5c8eedb1faf2483ea6e7f30320e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Piovani\\SwooleStudy\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Piovani\\SwooleStudy\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite25ba5c8eedb1faf2483ea6e7f30320e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite25ba5c8eedb1faf2483ea6e7f30320e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite25ba5c8eedb1faf2483ea6e7f30320e::$classMap;

        }, null, ClassLoader::class);
    }
}