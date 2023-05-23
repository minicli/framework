<?php

declare(strict_types=1);

namespace Minicli\Framework\Output\Printer;

use Minicli\Framework\Contracts\Output\PrinterContract;
use TypeError;

final class FilePrinter implements PrinterContract
{
    public function __construct(
        private string $outputFile,
    ) {
    }

    public function print(string $message): string
    {
        $fp = fopen($this->outputFile, 'a+');

        if (false === $fp) {
            throw new TypeError("Could not open file {$this->outputFile} for writing.");
        }

        fwrite($fp, $message);
        fclose($fp);

        return $message;
    }

    public function outputFile(): string
    {
        return $this->outputFile;
    }

    public function setOutputFile(string $outputFile): FilePrinter
    {
        $this->outputFile = $outputFile;

        return $this;
    }
}
