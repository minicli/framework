<?php

declare(strict_types=1);

namespace Minicli\Framework\Command;

use Minicli\Framework\Input\Input;

interface CommandContract
{
    /**
     * Executes the command logic.
     */
    public function handle(Input $input): void;

    /**
     * Called after the command is executed successfully.
     */
    public function teardown(): void;
}
