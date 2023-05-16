<?php

declare(strict_types=1);

namespace Minicli\Framework\Contracts\Theme;

namespace Minicli\Framework\Contracts\Theme;
namespace Minicli\Framework\Theme;

interface ThemeContract
{
    public function default(): ThemeStyle;

    public function alt(): ThemeStyle;

    public function error(): ThemeStyle;

    public function errorAlt(): ThemeStyle;

    public function warning(): ThemeStyle;

    public function warningAlt(): ThemeStyle;

    public function success(): ThemeStyle;

    public function successAlt(): ThemeStyle;

    public function info(): ThemeStyle;

    public function infoAlt(): ThemeStyle;

    public function bold(): ThemeStyle;

    public function dim(): ThemeStyle;

    public function italic(): ThemeStyle;

    public function underline(): ThemeStyle;

    public function invert(): ThemeStyle;
}
