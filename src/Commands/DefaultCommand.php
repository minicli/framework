<?php

declare(strict_types=1);

namespace Minicli\Framework\Commands;

use Minicli\Framework\Attributes\Description;
use Minicli\Framework\Attributes\Signature;
use Minicli\Framework\Input\Input;

#[Signature('default')]
#[Description('The default command for MiniCLI.')]
final class DefaultCommand extends AbstractCommand
{
    public function handle(Input $input): void
    {
        // TODO: Implement handle() method.
    }
}
