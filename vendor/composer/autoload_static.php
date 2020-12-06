<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26553e3d9750794723193776b4d922cf
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Midtrans\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Midtrans\\' => 
        array (
            0 => __DIR__ . '/..' . '/midtrans/midtrans-php/Midtrans',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26553e3d9750794723193776b4d922cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26553e3d9750794723193776b4d922cf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
