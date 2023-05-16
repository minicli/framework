<?php

declare(strict_types=1);

namespace Minicli\Framework\Contracts\Theme;

interface ThemeContract
{
    /**
     * Default style
     * @return array<int,MiniEnum>
     */
    public function default(): array;

    /**
     * Alternative style for Default
     * @return array<int,MiniEnum>
     */
    public function alt(): array;

    /**
     * Error style
     * @return array<int,MiniEnum>
     */
    public function error(): array;

    /**
     * Alternative style for Error
     * @return array<int,MiniEnum>
     */
    public function errorAlt(): array;

    /**
     * Success style
     * @return array<int,MiniEnum>
     */
    public function success(): array;

    /**
     * Alternative style for Success
     * @return array<int,MiniEnum>
     */
    public function successAlt(): array;

    /**
     * Info style
     * @return array<int,MiniEnum>
     */
    public function info(): array;

    /**
     * Alternative style for Info
     * @return array<int,MiniEnum>
     */
    public function infoAlt(): array;
}
