<?php

declare(strict_types=1);

namespace Minicli\Framework\Commands;

use Minicli\Framework\Input\Input;

final class DefaultCommand extends AbstractCommand
{
    public string $signature = 'default';

    public function handle(Input $input): void
    {
        // TODO: Implement handle() method.
    }
}
