<?php

declare(strict_types=1);

namespace AbstractComponentConfiguration;

abstract class AbstractComponentConfiguration
{
    public static function getComponentType(): int
    {
        return 3;
    }

    public static function getComponentName(): string
    {
        return 'Twig';
    }

    public static function getComponentSlug(): string
    {
        return 'twig';
    }

    public static function isPhp56Enabled(): bool
    {
        return true;
    }

    public static function isPhp70Enabled(): bool
    {
        return true;
    }

    public static function isPhp71Enabled(): bool
    {
        return true;
    }

    public static function isPhp72Enabled(): bool
    {
        return true;
    }

    public static function isPhp73Enabled(): bool
    {
        return true;
    }

    public static function getBenchmarkUrl(): string
    {
        return 'index.php';
    }

    public static function getCoreDependencyName(): string
    {
        return 'twig/twig';
    }

    public static function getCoreDependencyMajorVersion(): int
    {
        return 1;
    }

    public static function getCoreDependencyMinorVersion(): int
    {
        return 40;
    }

    public static function getCoreDependencyPatchVersion(): int
    {
        return 1;
    }

    public static function getBenchmarkType(): int
    {
        return 1;
    }

    public static function getSourceCodeUrls(): array
    {
        return [
            'entryPoint' => 'https://github.com/phpbenchmarks/twig-common/blob/twig_1_hello-world/helloworld.php',
            'template' => 'https://github.com/phpbenchmarks/twig-common/blob/twig_1_hello-world/templates/helloworld.html.twig'
        ];
    }
}
