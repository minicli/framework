<?php

declare(strict_types=1);

namespace Minicli\Framework\Input;

final class Input
{
    private const DEFAULT_COMMAND = 'help';

    /**
     * The command to be called.
     */
    private string $command = '';

    /**
     * The raw arguments passed to the command.
     *
     * @var array<int,string> $rawArgs
     */
    private array $rawArgs = [];

    /**
     * The raw arguments passed to the command.
     *
     * @var array<int,string> $args
     */
    private array $args = [];

    /**
     * The parsed parameters passed to the command.
     *
     * @var array<string,string> $params
     */
    private array $params = [];

    /**
     * The parsed flags passed to the command.
     *
     * @var array<int, string> $flags
     */
    private array $flags = [];

    public function __construct(array $argv)
    {
        $this->rawArgs = $argv;

        $this->parseInput();

        if ($this->args[1]) {
            $this->command = $this->args[1];
        }

        if ($this->args[2]) {
            $this->command .= " {$this->args[2]}";
        }

        if ('' === $this->command) {
            $this->command = self::DEFAULT_COMMAND;
        }
    }

    public function command(): ?string
    {
        return $this->command;
    }

    /**
     * @return array<string,string>
     */
    public function params(): array
    {
        return $this->params;
    }

    public function param(string $param, ?string $default = null): ?string
    {
        return $this->params[$param] ?? $default;
    }

    public function hasParam(string $param): bool
    {
        return isset($this->params[$param]);
    }

    /**
     * @return array<int,string>
     */
    public function flags(): array
    {
        return $this->flags;
    }

    public function hasFlag(string $flag): bool
    {
        return in_array($flag, $this->flags) || in_array("--{$flag}", $this->flags);
    }

    /**
     * @return array<int,string>
     */
    public function getRawArgs(): array
    {
        return $this->rawArgs;
    }

    private function parseInput(): void
    {
        foreach ($this->rawArgs as $arg) {
            $parts = explode('=', $arg);

            if (count($parts) >= 2) {
                $this->params[$parts[0]] = join('=', array_slice($parts, 1));
                continue;
            }

            if (str_starts_with($arg, '--')) {
                $this->flags[] = $arg;
                continue;
            }

            $this->args[] = $arg;
        }
    }
}
