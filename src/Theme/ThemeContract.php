<?php

declare(strict_types=1);

namespace Minicli\Framework\Theme;

use StringBackedEnum;

interface ThemeContract
{
    /**
     * Default style
     * @return array<int,StringBackedEnum>
     */
    public function default(): array;

    /**
     * Alternative style for Default
     * @return array<int,StringBackedEnum>
     */
    public function alt(): array;

    /**
     * Error style
     * @return array<int,StringBackedEnum>
     */
    public function error(): array;

    /**
     * Alternative style for Error
     * @return array<int,StringBackedEnum>
     */
    public function errorAlt(): array;

    /**
     * Success style
     * @return array<int,StringBackedEnum>
     */
    public function success(): array;

    /**
     * Alternative style for Success
     * @return array<int,StringBackedEnum>
     */
    public function successAlt(): array;

    /**
     * Info style
     * @return array<int,StringBackedEnum>
     */
    public function info(): array;

    /**
     * Alternative style for Info
     * @return array<int,StringBackedEnum>
     */
    public function infoAlt(): array;
}
