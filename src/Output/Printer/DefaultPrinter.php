<?php

declare(strict_types=1);

namespace Minicli\Framework\Output\Printer;

use Minicli\Framework\Contracts\Output\PrinterContract;

final class DefaultPrinter implements PrinterContract
{
    public function print(string $message): string
    {
        return $message;
    }
}
