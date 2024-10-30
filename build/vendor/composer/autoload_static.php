<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6ac9b8da6a2893e0df1b66b44ac23588
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lazysizes\\Vendor\\kornrunner\\Blurhash\\' => 37,
            'Lazysizes\\Vendor\\Lazysizes\\' => 27,
            'Lazysizes\\Vendor\\Composer\\Installers\\' => 37,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lazysizes\\Vendor\\kornrunner\\Blurhash\\' => 
        array (
            0 => __DIR__ . '/..' . '/kornrunner/blurhash/src',
        ),
        'Lazysizes\\Vendor\\Lazysizes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc/Lazysizes',
        ),
        'Lazysizes\\Vendor\\Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6ac9b8da6a2893e0df1b66b44ac23588::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6ac9b8da6a2893e0df1b66b44ac23588::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
