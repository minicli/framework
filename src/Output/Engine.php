<?php

declare(strict_types=1);

namespace Minicli\Framework\Output;

use Minicli\Framework\Contracts\Output\PrinterContract;
use Minicli\Framework\Contracts\Theme\ThemeContract;

final class Engine
{
    public function __construct(
        private readonly ThemeContract $theme,
        private readonly PrinterContract $printer,
    ) {}

    public function print(string $message): string
    {
        // @todo Filter message through theme before sending to the printer.
        return $this->printer->print(
            message: $message,
        );
    }
}
