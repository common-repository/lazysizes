<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06002772a9699bfa664d668fb73ced09
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lazysizes\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lazysizes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc/Lazysizes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit06002772a9699bfa664d668fb73ced09::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06002772a9699bfa664d668fb73ced09::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
