<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit61f77e5ab9e979e96354312e8fc48f94
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit61f77e5ab9e979e96354312e8fc48f94', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit61f77e5ab9e979e96354312e8fc48f94', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit61f77e5ab9e979e96354312e8fc48f94::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
