<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb4e94daf680a7cc8432aca61864b3fca
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Utente\\Esercizio3\\' => 18,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Utente\\Esercizio3\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb4e94daf680a7cc8432aca61864b3fca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb4e94daf680a7cc8432aca61864b3fca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb4e94daf680a7cc8432aca61864b3fca::$classMap;

        }, null, ClassLoader::class);
    }
}
