<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e11d6c19b4e3e60fb754d8c1b667c00
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Theadeyemiolayinka\\PayTheDev\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Theadeyemiolayinka\\PayTheDev\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3e11d6c19b4e3e60fb754d8c1b667c00::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3e11d6c19b4e3e60fb754d8c1b667c00::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3e11d6c19b4e3e60fb754d8c1b667c00::$classMap;

        }, null, ClassLoader::class);
    }
}
