<?php

declare(strict_types=1);

namespace Minicli\Framework;

use Minicli\Framework\Configuration\Config;

final class Minicli
{
    public const VERSION = '0.0.1';

    public function __construct(
        protected readonly Config $config,
    ) {
    }

    public static function boot(
        string $path,
        string $theme,
        bool $debug = false,
    ): Minicli {
        $config = new Config(
            path: $path,
            theme: $theme,
            debug: $debug,
        );

        return new Minicli(
            config: $config
        );
    }
}
