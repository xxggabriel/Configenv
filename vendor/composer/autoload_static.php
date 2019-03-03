<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1771fdfcec321a71987feae175dee867
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Config\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1771fdfcec321a71987feae175dee867::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1771fdfcec321a71987feae175dee867::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}