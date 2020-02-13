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
        'myReef\\classes\\ajax' => __DIR__ . '/../..' . '/classes/ajax.php',
        'myReef\\classes\\imageUploader' => __DIR__ . '/../..' . '/classes/image-uploader.php',
        'myReef\\classes\\metaProperties' => __DIR__ . '/../..' . '/classes/meta-properties.php',
        'myReef\\classes\\page' => __DIR__ . '/../..' . '/classes/page.php',
        'myReef\\classes\\uploader' => __DIR__ . '/../..' . '/classes/uploader.php',
        'myReef\\classes\\user' => __DIR__ . '/../..' . '/classes/user.php',
        'myReef\\controllers\\addListing' => __DIR__ . '/../..' . '/controllers/add-listing.php',
        'myReef\\controllers\\ajax' => __DIR__ . '/../..' . '/controllers/ajax.php',
        'myReef\\controllers\\browseListings' => __DIR__ . '/../..' . '/controllers/browse-listings.php',
        'myReef\\controllers\\contact' => __DIR__ . '/../..' . '/controllers/contact.php',
        'myReef\\controllers\\controller' => __DIR__ . '/../..' . '/controllers/controller.php',
        'myReef\\controllers\\donate' => __DIR__ . '/../..' . '/controllers/donate.php',
        'myReef\\controllers\\faq' => __DIR__ . '/../..' . '/controllers/faq.php',
        'myReef\\controllers\\listing' => __DIR__ . '/../..' . '/controllers/listing.php',
        'myReef\\controllers\\listingNotFound' => __DIR__ . '/../..' . '/controllers/listing-not-found.php',
        'myReef\\controllers\\myListings' => __DIR__ . '/../..' . '/controllers/my-listings.php',
        'myReef\\controllers\\pageNotFound' => __DIR__ . '/../..' . '/controllers/page-not-found.php',
        'myReef\\controllers\\privacyPolicy' => __DIR__ . '/../..' . '/controllers/privacy-policy.php',
        'myReef\\controllers\\root' => __DIR__ . '/../..' . '/controllers/root.php',
        'myReef\\controllers\\termsOfService' => __DIR__ . '/../..' . '/controllers/terms-of-service.php',
        'myReef\\models\\ajaxResponse' => __DIR__ . '/../..' . '/models/ajax-response.php',
        'myReef\\models\\listing' => __DIR__ . '/../..' . '/models/listing.php',
        'myReef\\models\\listingResults' => __DIR__ . '/../..' . '/models/listingResults.php',
        'myReef\\models\\model' => __DIR__ . '/../..' . '/models/model.php',
        'myReef\\services\\listings' => __DIR__ . '/../..' . '/services/listings.php',
        'myReef\\services\\service' => __DIR__ . '/../..' . '/services/service.php',
        'myReef\\views\\addListing' => __DIR__ . '/../..' . '/views/add-listing.php',
        'myReef\\views\\browseListings' => __DIR__ . '/../..' . '/views/browse-listings.php',
        'myReef\\views\\contact' => __DIR__ . '/../..' . '/views/contact.php',
        'myReef\\views\\donate' => __DIR__ . '/../..' . '/views/donate.php',
        'myReef\\views\\faq' => __DIR__ . '/../..' . '/views/faq.php',
        'myReef\\views\\listing' => __DIR__ . '/../..' . '/views/listing.php',
        'myReef\\views\\listingNotFound' => __DIR__ . '/../..' . '/views/listing-not-found.php',
        'myReef\\views\\myListings' => __DIR__ . '/../..' . '/views/my-listings.php',
        'myReef\\views\\pageNotFound' => __DIR__ . '/../..' . '/views/page-not-found.php',
        'myReef\\views\\privacyPolicy' => __DIR__ . '/../..' . '/views/privacy-policy.php',
        'myReef\\views\\root' => __DIR__ . '/../..' . '/views/root.php',
        'myReef\\views\\termsOfService' => __DIR__ . '/../..' . '/views/terms-of-service.php',
        'myReef\\views\\view' => __DIR__ . '/../..' . '/views/view.php',
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
