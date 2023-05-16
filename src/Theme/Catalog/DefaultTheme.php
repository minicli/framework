<?php

declare(strict_types=1);

namespace Minicli\Framework\Theme\Catalog;

use Minicli\Framework\Theme\Enums\Background;
use Minicli\Framework\Theme\Enums\FontWeight;
use Minicli\Framework\Theme\Enums\Foreground;
use Minicli\Framework\Contracts\Theme\ThemeContract;
use Minicli\Framework\Theme\ThemeStyle;

final class DefaultTheme implements ThemeContract
{
    public function default(): ThemeStyle
    {
        return ThemeStyle::make(Foreground::WHITE);
    }

    public function alt(): ThemeStyle
    {
        return ThemeStyle::make(Foreground::BLACK, Background::WHITE);
    }

    public function error(): ThemeStyle
    {
        return ThemeStyle::make(Foreground::RED);
    }

    public function errorAlt(): ThemeStyle
    {
        return ThemeStyle::make(Foreground::WHITE, Background::RED);
    }

    public function warning(): ThemeStyle
    {
        return ThemeStyle::make(Foreground::YELLOW);
    }

    public function warningAlt(): ThemeStyle
    {
        return ThemeStyle::make(Foreground::WHITE, Background::YELLOW);
    }

    public function success(): ThemeStyle
    {
        return ThemeStyle::make(Foreground::GREEN);
    }

    public function successAlt(): ThemeStyle
    {
        return ThemeStyle::make(Foreground::WHITE, Background::GREEN);
    }

    public function info(): ThemeStyle
    {
        return ThemeStyle::make(Foreground::CYAN);
    }

    public function infoAlt(): ThemeStyle
    {
        return ThemeStyle::make(Foreground::WHITE, Background::CYAN);
    }

    public function bold(): ThemeStyle
    {
        return ThemeStyle::make(FontWeight::BOLD);
    }

    public function dim(): ThemeStyle
    {
        return ThemeStyle::make(FontWeight::DIM);
    }

    public function italic(): ThemeStyle
    {
        return ThemeStyle::make(FontWeight::ITALIC);
    }

    public function underline(): ThemeStyle
    {
        return ThemeStyle::make(FontWeight::UNDERLINE);
    }

    public function invert(): ThemeStyle
    {
        return ThemeStyle::make(FontWeight::INVERT);
    }
}
