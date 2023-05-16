<?php

declare(strict_types=1);

namespace Minicli\Framework\Theme\Catalog;

use Minicli\Framework\Theme\Enums\Background;
use Minicli\Framework\Theme\Enums\Foreground;
use Minicli\Framework\Contracts\Theme\ThemeContract;

final class DefaultTheme implements ThemeContract
{
    public function default(): array
    {
        return [
            Foreground::WHITE,
        ];
    }

    public function alt(): array
    {
        return [
            Foreground::BLACK,
            Background::WHITE,
        ];
    }

    public function error(): array
    {
        return [
            Foreground::RED,
        ];
    }

    public function errorAlt(): array
    {
        return [
            Foreground::WHITE,
            Background::RED,
        ];
    }

    public function success(): array
    {
        return [
            Foreground::GREEN,
        ];
    }

    public function successAlt(): array
    {
        return [
            Foreground::WHITE,
            Background::GREEN,
        ];
    }

    public function info(): array
    {
        return [
            Foreground::CYAN,
        ];
    }

    public function infoAlt(): array
    {
        return [
            Foreground::WHITE,
            Background::CYAN,
        ];
    }
}
