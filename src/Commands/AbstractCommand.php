<?php

declare(strict_types=1);

namespace Minicli\Framework\Commands;

use Minicli\Framework\Contracts\Commands\CommandContract;

abstract class AbstractCommand implements CommandContract
{
    public function teardown(): void
    {
    }
}
