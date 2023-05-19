<?php

declare(strict_types=1);

namespace Minicli\Framework;

use Minicli\Framework\Commands\AbstractCommand;
use Minicli\Framework\Commands\DefaultCommand;
use Minicli\Framework\Configuration\Config;
use Minicli\Framework\Contracts\Theme\ThemeContract;
use Minicli\Framework\DI\Container;
use Minicli\Framework\Input\Input;

final class Minicli extends Container
{
    public const VERSION = '0.0.1';

    public function __construct(
        protected readonly Config $config,
    ) {
        parent::__construct();

        $this->loadCommands();
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

    /**
     * Runs the application with the given input.
     *
     * @param array<int,string> $argv
     * @return void
     */
    public function run(array $argv = []): void
    {
        $input = new Input($argv);
        $command = $this->getCommand($input->command());

        $command->handle($input);
        $command->teardown();
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
