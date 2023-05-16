<?php

declare(strict_types=1);

namespace Minicli\Framework;

use Minicli\Framework\Attributes\Description;
use Minicli\Framework\Attributes\Signature;
use Minicli\Framework\Commands\AbstractCommand;
use Minicli\Framework\Commands\CommandCollector;
use Minicli\Framework\Configuration\Config;
use Minicli\Framework\Contracts\Theme\ThemeContract;
use Minicli\Framework\DI\Container;
use ReflectionClass;
use ReflectionException;

final class Minicli extends Container
{
    public const VERSION = '0.0.1';

    protected readonly Config $config;

    public readonly CommandCollector $commands;

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
        $cli = Minicli::getInstance();
        $cli->config = new Config(
            path: $path,
            theme: $theme,
            debug: $debug,
        );
        $cli->commands = new CommandCollector();

        return $cli;
    }

    /**
     * @param class-string<AbstractCommand> $command
     * @return Minicli
     * @throws ReflectionException
     */
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
     * @param array<int,string> $arguments
     */
    public function run(array $arguments)
    {
        $command = (count($arguments) <= 1)
            ? 'default'
            : $arguments[1];

        $instance =  $this->commands->match(
            signature: $command,
        );

        $instance = $this->make(
            abstract: $instance['instance'],
        );

        var_dump($instance->handle());die();
    }
}
