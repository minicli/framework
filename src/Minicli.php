<?php

declare(strict_types=1);

namespace Minicli\Framework;

use Minicli\Framework\Attributes\Description;
use Minicli\Framework\Attributes\Signature;
use Minicli\Framework\Commands\AbstractCommand;
use Minicli\Framework\Commands\CommandCollector;
use Minicli\Framework\Commands\DefaultCommand;
use Minicli\Framework\Configuration\Config;
use Minicli\Framework\Contracts\Theme\ThemeContract;
use Minicli\Framework\DI\Container;
use Minicli\Framework\Exceptions\MissingParametersException;
use Minicli\Framework\Input\Input;
use ReflectionClass;

final class Minicli extends Container
{
    public const VERSION = '0.0.1';

    public function __construct(
        protected readonly Config $config,
        protected CommandCollector $commands = new CommandCollector(),
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
     * @throws MissingParametersException
     */
    public function run(array $argv = []): void
    {
        $input = new Input($argv);
        $command = $this->getCommand($input->command());

        var_dump($command);die();

        $command->boot($input);
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

    public function command(string $command): Minicli
    {
        $reflection = new ReflectionClass(
            objectOrClass: $command,
        );

        $parent = $reflection->getParentClass();

        if (! $parent || $parent->getName() !== AbstractCommand::class) {
            return $this;
        }

        $this->commands->add(
            signature: $reflection->getAttributes(Signature::class)[0]->newInstance()->signature,
            description: $reflection->getAttributes(Description::class)[0]->newInstance()->description,
            instance: $command,
        );

        return $this;
    }

    /**
     * Gets command from DI container by name or returns the default one.
     */
    private function getCommand(string $command): AbstractCommand
    {
        $instance = $this->commands->match(
            signature: $command,
        );

        if (! $instance) {
            return new DefaultCommand();
        }

        return $this->make(
            abstract: $command['instance'],
        );
    }
}
