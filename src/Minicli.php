<?php

declare(strict_types=1);

namespace Minicli\Framework;

use Minicli\Framework\Configuration\Config;
use Minicli\Framework\Contracts\Output\PrinterContract;
use Minicli\Framework\Contracts\Theme\ThemeContract;
use Minicli\Framework\DI\Container;
use Minicli\Framework\Output\Engine;
use Minicli\Framework\Output\Printer\DefaultPrinter;
use Minicli\Framework\Theme\Catalog\DefaultTheme;

final class Minicli extends Container
{
    public const VERSION = '0.0.1';

    public function __construct(
        protected readonly Config $config,
    ) {
        parent::__construct();
    }

    /**
     * @param string $path
     * @param class-string<ThemeContract>|null $theme
     * @param bool $debug
     * @return Minicli
     */
    public static function boot(
        string $path,
        ?string $theme,
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
