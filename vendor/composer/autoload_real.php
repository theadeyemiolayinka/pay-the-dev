<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit3e11d6c19b4e3e60fb754d8c1b667c00
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit3e11d6c19b4e3e60fb754d8c1b667c00', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit3e11d6c19b4e3e60fb754d8c1b667c00', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit3e11d6c19b4e3e60fb754d8c1b667c00::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}