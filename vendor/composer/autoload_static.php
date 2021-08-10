<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc44fa4471f0ec06f453494ebe4ebb70
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JUImage\\' => 8,
        ),
        'F' => 
        array (
            'FastImageSize\\tests\\' => 20,
            'FastImageSize\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JUImage\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'FastImageSize\\tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/marc1706/fast-image-size/tests',
        ),
        'FastImageSize\\' => 
        array (
            0 => __DIR__ . '/..' . '/marc1706/fast-image-size/lib',
        ),
    );

    public static $classMap = array (
        'CGIF' => __DIR__ . '/../..' . '/src/classes/phpthumb/phpthumb.gif.php',
        'CGIFCOLORTABLE' => __DIR__ . '/../..' . '/src/classes/phpthumb/phpthumb.gif.php',
        'CGIFFILEHEADER' => __DIR__ . '/../..' . '/src/classes/phpthumb/phpthumb.gif.php',
        'CGIFIMAGE' => __DIR__ . '/../..' . '/src/classes/phpthumb/phpthumb.gif.php',
        'CGIFIMAGEHEADER' => __DIR__ . '/../..' . '/src/classes/phpthumb/phpthumb.gif.php',
        'CGIFLZW' => __DIR__ . '/../..' . '/src/classes/phpthumb/phpthumb.gif.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'FastImageSize\\FastImageSize' => __DIR__ . '/..' . '/marc1706/fast-image-size/lib/FastImageSize.php',
        'FastImageSize\\Type\\TypeBase' => __DIR__ . '/..' . '/marc1706/fast-image-size/lib/Type/TypeBase.php',
        'FastImageSize\\Type\\TypeBmp' => __DIR__ . '/..' . '/marc1706/fast-image-size/lib/Type/TypeBmp.php',
        'FastImageSize\\Type\\TypeGif' => __DIR__ . '/..' . '/marc1706/fast-image-size/lib/Type/TypeGif.php',
        'FastImageSize\\Type\\TypeIco' => __DIR__ . '/..' . '/marc1706/fast-image-size/lib/Type/TypeIco.php',
        'FastImageSize\\Type\\TypeIff' => __DIR__ . '/..' . '/marc1706/fast-image-size/lib/Type/TypeIff.php',
        'FastImageSize\\Type\\TypeInterface' => __DIR__ . '/..' . '/marc1706/fast-image-size/lib/Type/TypeInterface.php',
        'FastImageSize\\Type\\TypeJp2' => __DIR__ . '/..' . '/marc1706/fast-image-size/lib/Type/TypeJp2.php',
        'FastImageSize\\Type\\TypeJpeg' => __DIR__ . '/..' . '/marc1706/fast-image-size/lib/Type/TypeJpeg.php',
        'FastImageSize\\Type\\TypePng' => __DIR__ . '/..' . '/marc1706/fast-image-size/lib/Type/TypePng.php',
        'FastImageSize\\Type\\TypePsd' => __DIR__ . '/..' . '/marc1706/fast-image-size/lib/Type/TypePsd.php',
        'FastImageSize\\Type\\TypeTif' => __DIR__ . '/..' . '/marc1706/fast-image-size/lib/Type/TypeTif.php',
        'FastImageSize\\Type\\TypeWbmp' => __DIR__ . '/..' . '/marc1706/fast-image-size/lib/Type/TypeWbmp.php',
        'FastImageSize\\Type\\TypeWebp' => __DIR__ . '/..' . '/marc1706/fast-image-size/lib/Type/TypeWebp.php',
        'JUImage\\Image' => __DIR__ . '/../..' . '/src/Image.php',
        'phpUnsharpMask' => __DIR__ . '/../..' . '/src/classes/phpthumb/phpthumb.unsharp.php',
        'phpthumb' => __DIR__ . '/../..' . '/src/classes/phpthumb/phpthumb.class.php',
        'phpthumb_bmp' => __DIR__ . '/../..' . '/src/classes/phpthumb/phpthumb.bmp.php',
        'phpthumb_filters' => __DIR__ . '/../..' . '/src/classes/phpthumb/phpthumb.filters.php',
        'phpthumb_functions' => __DIR__ . '/../..' . '/src/classes/phpthumb/phpthumb.functions.php',
        'phpthumb_ico' => __DIR__ . '/../..' . '/src/classes/phpthumb/phpthumb.ico.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc44fa4471f0ec06f453494ebe4ebb70::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc44fa4471f0ec06f453494ebe4ebb70::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdc44fa4471f0ec06f453494ebe4ebb70::$classMap;

        }, null, ClassLoader::class);
    }
}
