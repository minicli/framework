<?php

declare(strict_types=1);

namespace Minicli\Framework\Commands;

final class CommandCollector
{
    public function __construct(
        public array $commands = [],
    ) {}

    public function add(
        string $signature,
        string $description,
        string $instance,
    ): void {
        $this->commands[$signature] = [
            'signature' => $signature,
            'description' => $description,
            'instance' => $instance,
        ];
    }

    /**
     * @param string $signature
     * @return array<string,string>|null
     */
    public function match(string $signature): null|array
    {
        return $this->commands[$signature] ?? null;
    }
}
