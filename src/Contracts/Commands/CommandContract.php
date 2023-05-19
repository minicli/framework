<?php

declare(strict_types=1);

namespace Minicli\Framework\Contracts\Commands;

use Minicli\Framework\Input\Input;

interface CommandContract
{
    /**
     * Executes the command logic.
     */
    public function handle(Input $input): void;

    /**
     * The list of parameters required by the command.
     *
     * @return array<int,string>
     */
    public function required(): array;

    /**
     * Called after the command is executed successfully.
     */
    public function teardown(): void;
}
