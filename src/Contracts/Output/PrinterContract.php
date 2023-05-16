<?php

declare(strict_types=1);

namespace Minicli\Framework\Contracts\Output;

interface PrinterContract
{
    public function print(string $message): string;
}
