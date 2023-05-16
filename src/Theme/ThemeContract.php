<?php

declare(strict_types=1);

namespace Minicli\Framework\Theme;

interface ThemeContract
{
    /**
     * Default style
     */
    public function default(): ThemeStyle;

    /**
     * Alternative style for Default
     */
    public function alt(): ThemeStyle;

    /**
     * Error style
     */
    public function error(): ThemeStyle;

    /**
     * Alternative style for Error
     */
    public function errorAlt(): ThemeStyle;

    /**
     * Warning style
     */
    public function warning(): ThemeStyle;

    /**
     * Alternative style for Warning
     */
    public function warningAlt(): ThemeStyle;

    /**
     * Success style
     */
    public function success(): ThemeStyle;

    /**
     * Alternative style for Success
     */
    public function successAlt(): ThemeStyle;

    /**
     * Info style
     */
    public function info(): ThemeStyle;

    /**
     * Alternative style for Info
     */
    public function infoAlt(): ThemeStyle;

    /**
     * Bold style
     */
    public function bold(): ThemeStyle;

    /**
     * Dim style
     */
    public function dim(): ThemeStyle;

    /**
     * Italic style
     */
    public function italic(): ThemeStyle;

    /**
     * Underline style
     */
    public function underline(): ThemeStyle;

    /**
     * Invert style
     */
    public function invert(): ThemeStyle;
}
