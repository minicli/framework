<?php

declare(strict_types=1);

namespace Minicli\Framework;

use Minicli\Framework\Command\CommandContract;
use Minicli\Framework\Command\HelpCommand;
use Minicli\Framework\Configuration\Config;
use Minicli\Framework\Input\Input;
use Minicli\Framework\Theme\ThemeContract;

final class Minicli
{
    public const VERSION = '0.0.1';

    public function __construct(
        protected readonly Config $config,
    ) {
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
    private function getCommand(string $command): CommandContract
    {
        // TODO: Implement
        return new HelpCommand();
    }
}
