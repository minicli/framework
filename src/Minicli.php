<?php

declare(strict_types=1);

namespace Minicli\Framework;

use Minicli\Framework\Commands\PendingCommand;
use Minicli\Framework\Contracts\Output\PrinterContract;
use Minicli\Framework\Contracts\Theme\ThemeContract;
use Minicli\Framework\DI\Container;
use Minicli\Framework\Exceptions\BindingResolutionException;
use Minicli\Framework\Output\Engine;
use Minicli\Framework\Output\Printer\DefaultPrinter;
use Minicli\Framework\Theme\Catalog\DefaultTheme;
use ReflectionException;

final class Minicli extends Container
{
    public const VERSION = '0.0.1';

    public string $name;

    public array|string $path;

    public ThemeContract $theme;

    public bool $debug = false;

    public Engine $engine;

    /**
     * @param string $name
     * @param array|string $path
     * @param null|class-string<ThemeContract> $theme
     * @param bool $debug
     * @param PrinterContract|null $printer
     * @return Minicli
     */
    public static function boot(
        string $name,
        array|string $path,
        null|string $theme,
        bool $debug = false,
        null|PrinterContract $printer = null,
    ): Minicli {
        return Minicli::getInstance()->name(
            name: $name,
        )->path(
            path: $path,
        )->theme(
            theme: $theme ?? DefaultTheme::class,
        )->debug(
            debug: $debug,
        )->buildEngine(
            printer: $printer ?? new DefaultPrinter(),
        );
    }

    public function name(string $name): Minicli
    {
        $this->name = $name;

        return $this;
    }

    public function path(string|array $path): Minicli
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @param class-string<ThemeContract> $theme
     * @return $this
     * @throws BindingResolutionException|ReflectionException
     */
    public function theme(string $theme): Minicli
    {
        /**
         * @var ThemeContract $instance
         */
        $instance = $this->make(
            abstract: $theme,
        );

        $this->theme = $instance;

        return $this;
    }

    public function debug(bool $debug): Minicli
    {
        $this->debug = $debug;

        return $this;
    }

    public function buildEngine(PrinterContract $printer): Minicli
    {
        $this->engine = new Engine(
            theme: $this->theme,
            printer: $printer,
        );

        return $this;
    }

    public function run(array $arguments = []): void
    {
        $command = PendingCommand::build(
            arguments: $arguments,
        );
        // build and send command through engine.
    }
}
