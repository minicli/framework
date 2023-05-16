<?php

declare(strict_types=1);

namespace Minicli\Framework\Commands;

use Minicli\Framework\Attributes\Description;
use Minicli\Framework\Attributes\Signature;
use Minicli\Framework\Minicli;

#[Signature('default')]
#[Description('The default command for Minicli')]
final class DefaultCommand extends AbstractCommand
{
    public function handle()
    {
        return Minicli::getInstance()->commands;
    }
}
