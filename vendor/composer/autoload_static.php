<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea44dbc9e2c034f807433c680ec353b4
{
    public static $files = array (
        '7a710bcf11bd1ce8b1b6080cc6277e8d' => __DIR__ . '/..' . '/wpmetabox/meta-box/meta-box.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitea44dbc9e2c034f807433c680ec353b4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea44dbc9e2c034f807433c680ec353b4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitea44dbc9e2c034f807433c680ec353b4::$classMap;

        }, null, ClassLoader::class);
    }
}
