<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1990c967bd288fa57e53d96f78c441e
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\LibrariesNamespaceChanger\\' => 31,
            'srag\\DIC\\' => 9,
        ),
        'I' => 
        array (
            'ILIAS\\Services\\TableUI\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\LibrariesNamespaceChanger\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src',
        ),
        'srag\\DIC\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
        'ILIAS\\Services\\TableUI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'srag\\DIC\\TableUI\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\TableUI\\DICStaticInterface' => __DIR__ . '/..' . '/srag/dic/src/DICStaticInterface.php',
        'srag\\DIC\\TableUI\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\TableUI\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/AbstractDIC.php',
        'srag\\DIC\\TableUI\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DIC/DICInterface.php',
        'srag\\DIC\\TableUI\\DIC\\Implementation\\ILIAS52DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS52DIC.php',
        'srag\\DIC\\TableUI\\DIC\\Implementation\\ILIAS53DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS53DIC.php',
        'srag\\DIC\\TableUI\\DIC\\Implementation\\ILIAS54DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS54DIC.php',
        'srag\\DIC\\TableUI\\DIC\\Implementation\\LegacyDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/LegacyDIC.php',
        'srag\\DIC\\TableUI\\Exception\\DICException' => __DIR__ . '/..' . '/srag/dic/src/Exception/DICException.php',
        'srag\\DIC\\TableUI\\Output\\Output' => __DIR__ . '/..' . '/srag/dic/src/Output/Output.php',
        'srag\\DIC\\TableUI\\Output\\OutputInterface' => __DIR__ . '/..' . '/srag/dic/src/Output/OutputInterface.php',
        'srag\\DIC\\TableUI\\PHPVersionChecker' => __DIR__ . '/..' . '/srag/dic/src/PHPVersionChecker.php',
        'srag\\DIC\\TableUI\\Plugin\\Plugin' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Plugin.php',
        'srag\\DIC\\TableUI\\Plugin\\PluginInterface' => __DIR__ . '/..' . '/srag/dic/src/Plugin/PluginInterface.php',
        'srag\\DIC\\TableUI\\Plugin\\Pluginable' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Pluginable.php',
        'srag\\DIC\\TableUI\\Version\\Version' => __DIR__ . '/..' . '/srag/dic/src/Version/Version.php',
        'srag\\DIC\\TableUI\\Version\\VersionInterface' => __DIR__ . '/..' . '/srag/dic/src/Version/VersionInterface.php',
        'srag\\LibrariesNamespaceChanger\\LibrariesNamespaceChanger' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/LibrariesNamespaceChanger.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite1990c967bd288fa57e53d96f78c441e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1990c967bd288fa57e53d96f78c441e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite1990c967bd288fa57e53d96f78c441e::$classMap;

        }, null, ClassLoader::class);
    }
}
