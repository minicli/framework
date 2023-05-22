<?php

declare(strict_types=1);

namespace Minicli\Framework;

use Minicli\Framework\Commands\AbstractCommand;
use Minicli\Framework\Commands\DefaultCommand;
use Minicli\Framework\Configuration\Config;
use Minicli\Framework\Contracts\Output\EngineContract;
use Minicli\Framework\Contracts\Output\PrinterContract;
use Minicli\Framework\Contracts\Theme\ThemeContract;
use Minicli\Framework\DI\Container;
use Minicli\Framework\Exceptions\MissingParametersException;
use Minicli\Framework\Input\Input;
use Minicli\Framework\Output\Engine\DefaultEngine;
use Minicli\Framework\Output\Printer\DefaultPrinter;
use Minicli\Framework\Theme\Catalog\DefaultTheme;

final class Minicli extends Container
{
    public const VERSION = '0.0.1';

    public function __construct(
        protected readonly Config $config,
    ) {
        parent::__construct();

        $this->loadEngine();
        $this->loadCommands();
    }

    /**
     * @param string $path
     * @param class-string<ThemeContract>|null $theme
     * @param class-string<PrinterContract>|null $printer
     * @param class-string<EngineContract>|null $engine
     * @param bool $debug
     * @return Minicli
     */
    public static function boot(
        string $path,
        ?string $theme,
        ?string $printer,
        ?string $engine,
        bool $debug = false,
    ): Minicli {
        $config = new Config(
            path: $path,
            theme: $theme,
            printer: $printer,
            engine: $engine,
            debug: $debug,
        );

        return new Minicli(
            config: $config
        );
    }

    /**
     * Runs the application with the given input.
     *
     * @param array<int,string> $argv
     * @return void
     * @throws MissingParametersException
     */
    public function run(array $argv = []): void
    {
        $input = new Input($argv);
        $command = $this->getCommand($input->command());

        $command->boot($input);
        $command->handle($input);
        $command->teardown();
    }

    private function loadEngine(): void
    {
        $this->singleton(
            abstract: ThemeContract::class,
            concrete: $this->config->theme() ?? DefaultTheme::class,
        );

        $this->singleton(
            abstract: PrinterContract::class,
            concrete: $this->config->printer() ?? DefaultPrinter::class,
        );

        $this->singleton(
            abstract: EngineContract::class,
            concrete: $this->config->engine() ?? DefaultEngine::class,
        );
    }

    /**
     * Loads commands into the DI container.
     */
    private function loadCommands(): void
    {
        // TODO: Implement
    }

    /**
     * Gets command from DI container by name or returns the default one.
     */
    private function getCommand(string $command): AbstractCommand
    {
        // TODO: Implement
        return new DefaultCommand();
    }
}
