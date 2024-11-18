<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3fb30174acb398daf39c2ec39dd9e37c
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Khouloudhaddad\\PerformanceCounter\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Khouloudhaddad\\PerformanceCounter\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3fb30174acb398daf39c2ec39dd9e37c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3fb30174acb398daf39c2ec39dd9e37c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3fb30174acb398daf39c2ec39dd9e37c::$classMap;

        }, null, ClassLoader::class);
    }
}
