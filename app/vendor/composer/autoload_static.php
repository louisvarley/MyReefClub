<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit32fcc238ffafd6e70c457a24144561ed
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'myReef\\views\\' => 13,
            'myReef\\services\\' => 16,
            'myReef\\models\\' => 14,
            'myReef\\controllers\\' => 19,
            'myReef\\classes\\' => 15,
            'myReef\\app\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'myReef\\views\\' => 
        array (
            0 => __DIR__ . '/../..' . '/views',
        ),
        'myReef\\services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/services',
        ),
        'myReef\\models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'myReef\\controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
        'myReef\\classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'myReef\\app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'myReef\\classes\\page' => __DIR__ . '/../..' . '/classes/page.php',
        'myReef\\controllers\\addListing' => __DIR__ . '/../..' . '/controllers/add-listing.php',
        'myReef\\controllers\\faq' => __DIR__ . '/../..' . '/controllers/faq.php',
        'myReef\\controllers\\main' => __DIR__ . '/../..' . '/controllers/main.php',
        'myReef\\controllers\\root' => __DIR__ . '/../..' . '/controllers/root.php',
        'myReef\\views\\addListing' => __DIR__ . '/../..' . '/views/add-listing.php',
        'myReef\\views\\faq' => __DIR__ . '/../..' . '/views/faq.php',
        'myReef\\views\\main' => __DIR__ . '/../..' . '/views/main.php',
        'myReef\\views\\root' => __DIR__ . '/../..' . '/views/root.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit32fcc238ffafd6e70c457a24144561ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit32fcc238ffafd6e70c457a24144561ed::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit32fcc238ffafd6e70c457a24144561ed::$classMap;

        }, null, ClassLoader::class);
    }
}
