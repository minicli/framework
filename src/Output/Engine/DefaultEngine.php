<?php

declare(strict_types=1);

namespace Minicli\Framework\Output\Engine;

use Minicli\Framework\Contracts\Output\EngineContract;
use Minicli\Framework\Contracts\Output\PrinterContract;
use Minicli\Framework\Contracts\Theme\ThemeContract;
use Minicli\Framework\Output\Table;
use Minicli\Framework\Theme\ThemeStyle;

final class DefaultEngine implements EngineContract
{
    public function __construct(
        private readonly ThemeContract $theme,
        private readonly PrinterContract $printer,
    ) {
    }

    public function print(string $message): void
    {
        print $this->printer->print($message);
    }

    public function newLine(): void
    {
        print $this->printer->print("\n");
    }

    public function table(Table $table): void
    {
        $this->newLine();
        $this->print($table->render());
        $this->newLine();
    }

    public function ask(string $question): string
    {
        // TODO: Implement ask() method.
        return '';
    }

    public function default(string $message): void
    {
        print $this->printer->print(
            message: $this->format($message, $this->theme->default()),
        );
    }

    public function alt(string $message): void
    {
        print $this->printer->print(
            message: $this->format($message, $this->theme->alt()),
        );
    }

    public function error(string $message): void
    {
        print $this->printer->print(
            message: $this->format($message, $this->theme->error()),
        );
    }

    public function errorAlt(string $message): void
    {
        print $this->printer->print(
            message: $this->format($message, $this->theme->errorAlt()),
        );
    }

    public function warning(string $message): void
    {
        print $this->printer->print(
            message: $this->format($message, $this->theme->warning()),
        );
    }

    public function warningAlt(string $message): void
    {
        print $this->printer->print(
            message: $this->format($message, $this->theme->warningAlt()),
        );
    }

    public function success(string $message): void
    {
        print $this->printer->print(
            message: $this->format($message, $this->theme->success()),
        );
    }

    public function successAlt(string $message): void
    {
        print $this->printer->print(
            message: $this->format($message, $this->theme->successAlt()),
        );
    }

    public function info(string $message): void
    {
        print $this->printer->print(
            message: $this->format($message, $this->theme->info()),
        );
    }

    public function infoAlt(string $message): void
    {
        print $this->printer->print(
            message: $this->format($message, $this->theme->infoAlt()),
        );
    }

    public function bold(string $message): void
    {
        print $this->printer->print(
            message: $this->format($message, $this->theme->bold()),
        );
    }

    public function dim(string $message): void
    {
        print $this->printer->print(
            message: $this->format($message, $this->theme->dim()),
        );
    }

    public function italic(string $message): void
    {
        print $this->printer->print(
            message: $this->format($message, $this->theme->italic()),
        );
    }

    public function underline(string $message): void
    {
        print $this->printer->print(
            message: $this->format($message, $this->theme->underline()),
        );
    }

    public function invert(string $message): void
    {
        print $this->printer->print(
            message: $this->format($message, $this->theme->invert()),
        );
    }

    private function format(string $message, ThemeStyle $style): string
    {
        $foreground = $style->foreground->value;
        $background = $style->background?->value ?? '';

        return sprintf("\e[%s%sm%s\e[0m", $foreground, $background, $message);
    }
}
