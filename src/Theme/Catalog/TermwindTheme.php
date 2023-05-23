<?php

declare(strict_types=1);

namespace Minicli\Framework\Theme\Catalog;

use Minicli\Framework\Contracts\Theme\ThemeContract;
use Minicli\Framework\Theme\Enums\TermwindStyle;
use Minicli\Framework\Theme\ThemeStyle;

final class TermwindTheme implements ThemeContract
{
    public function default(): ThemeStyle
    {
        return ThemeStyle::make(TermwindStyle::WHITE);
    }

    public function alt(): ThemeStyle
    {
        return ThemeStyle::make(TermwindStyle::GRAY_400);
    }

    public function error(): ThemeStyle
    {
        return ThemeStyle::make(TermwindStyle::RED_600);
    }

    public function errorAlt(): ThemeStyle
    {
        return ThemeStyle::make(TermwindStyle::RED_400);
    }

    public function warning(): ThemeStyle
    {
        return ThemeStyle::make(TermwindStyle::YELLOW_600);
    }

    public function warningAlt(): ThemeStyle
    {
        return ThemeStyle::make(TermwindStyle::YELLOW_400);
    }

    public function success(): ThemeStyle
    {
        return ThemeStyle::make(TermwindStyle::GREEN_600);
    }

    public function successAlt(): ThemeStyle
    {
        return ThemeStyle::make(TermwindStyle::GREEN_400);
    }

    public function info(): ThemeStyle
    {
        return ThemeStyle::make(TermwindStyle::CYAN_600);
    }

    public function infoAlt(): ThemeStyle
    {
        return ThemeStyle::make(TermwindStyle::CYAN_400);
    }

    public function bold(): ThemeStyle
    {
        return ThemeStyle::make(TermwindStyle::FONT_BOLD);
    }

    public function dim(): ThemeStyle
    {
        return ThemeStyle::make(TermwindStyle::GRAY_500);
    }

    public function italic(): ThemeStyle
    {
        return ThemeStyle::make(TermwindStyle::FONT_ITALLIC);
    }

    public function underline(): ThemeStyle
    {
        return ThemeStyle::make(TermwindStyle::FONT_UNDERLINE);
    }

    public function invert(): ThemeStyle
    {
        return ThemeStyle::make(TermwindStyle::BLACK, TermwindStyle::GRAY_400);
    }
}
