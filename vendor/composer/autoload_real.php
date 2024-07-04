<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite25ba5c8eedb1faf2483ea6e7f30320e
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

        spl_autoload_register(array('ComposerAutoloaderInite25ba5c8eedb1faf2483ea6e7f30320e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite25ba5c8eedb1faf2483ea6e7f30320e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite25ba5c8eedb1faf2483ea6e7f30320e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
