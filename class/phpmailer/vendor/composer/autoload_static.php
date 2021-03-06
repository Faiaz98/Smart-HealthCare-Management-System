<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8624a6ff94d82ce7f7ff6b84c0227677
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8624a6ff94d82ce7f7ff6b84c0227677::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8624a6ff94d82ce7f7ff6b84c0227677::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8624a6ff94d82ce7f7ff6b84c0227677::$classMap;

        }, null, ClassLoader::class);
    }
}
