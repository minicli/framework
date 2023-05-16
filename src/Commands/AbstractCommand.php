<?php

declare(strict_types=1);

namespace Minicli\Framework\Commands;

abstract class AbstractCommand
{
    abstract public function handle();
}
