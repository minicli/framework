<?php

declare(strict_types=1);

namespace Minicli\Framework\Commands;

final class PendingCommand
{
    public function __construct(
        protected string $command,
        protected array $arguments = [],
        protected array $flags = [],
    ) {
    }

    public static function build(array $arguments = []): PendingCommand
    {
        if (count($arguments) < 2) {
            var_dump('Run Default Command.');
            die();
        }

        unset($arguments[0]);

        $args = array_filter(
            array: $arguments,
            callback: fn (string $argument): bool => ! str_contains(
                haystack: $argument,
                needle: '--',
            ),
        );

        $flags = array_filter(
            array: $arguments,
            callback: fn (string $argument): bool => str_contains(
                haystack: $argument,
                needle: '--',
            ),
        );

        // $reflection = new Re

        $command = $args[1];
        unset($args[1]);
        // do we have any flags?
        // wh
        var_dump($args, $flags, $command);
        die();
    }
}
