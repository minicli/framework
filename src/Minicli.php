<?php

declare(strict_types=1);

namespace Minicli\Framework;

use Minicli\App;
use Minicli\Framework\Configuration\Config;

final class Minicli
{
    public const VERSION = '0.0.1';

    public function __construct(
        protected readonly Config $config,
        protected readonly App $app,
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
            config: $config,
            app: new App($config->toArray()),
        );
    }
}
