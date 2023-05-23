<?php

declare(strict_types=1);

namespace Minicli\Framework\Output\Engine;

use http\Exception\InvalidArgumentException;
use Minicli\Framework\Contracts\Output\EngineContract;
use Minicli\Framework\Contracts\Theme\TermwindThemeContract;
use Minicli\Framework\Output\Services\Termwind;
use Minicli\Framework\Output\Table;
use Minicli\Framework\Theme\Enums\TermwindStyle;
use Minicli\Framework\Theme\ThemeStyle;

final class TermwindEngine implements EngineContract
{
    public function __construct(
        private readonly TermwindThemeContract $theme,
        private readonly Termwind $termwind,
    ) {
    }

    public function print(string $message): void
    {
        $this->termwind->render(
            content: $message
        );
    }

    public function lineBreak(): void
    {
        $this->termwind->render(
            content: '<br />'
        );
    }

    public function table(Table $table): void
    {
        $content = '<table><thead><tr>';

        foreach ($table->headers() as $header) {
            $content .= "<th>{$header}</th>";
        }

        $content .= '</tr></thead><tbody>';

        foreach ($table->rows() as $row) {
            $content .= '<tr>';

            foreach ($row as $cell) {
                $content .= "<td>{$cell}</td>";
            }

            $content .= '</tr>';
        }

        $this->termwind->render(
            content: "{$content}</tbody></table>"
        );
    }

    public function ask(string $question, string $method = 'default'): string
    {
        if ( ! method_exists($this->theme, $method)) {
            throw new InvalidArgumentException("No output for [{$method}]");
        }

        /** @phpstan-ignore-next-line */
        return (string) $this->termwind->ask(
            question: $this->formatMessage($question, $this->theme->{$method}())
        );
    }

    public function default(string $message): void
    {
        $this->termwind->render(
            content: $this->formatMessage($message, $this->theme->default())
        );
    }

    public function alt(string $message): void
    {
        $this->termwind->render(
            content: $this->formatMessage($message, $this->theme->alt())
        );
    }

    public function error(string $message): void
    {
        $this->termwind->render(
            content: $this->formatMessage($message, $this->theme->error())
        );
    }

    public function errorAlt(string $message): void
    {
        $this->termwind->render(
            content: $this->formatMessage($message, $this->theme->errorAlt())
        );
    }

    public function warning(string $message): void
    {
        $this->termwind->render(
            content: $this->formatMessage($message, $this->theme->warning())
        );
    }

    public function warningAlt(string $message): void
    {
        $this->termwind->render(
            content: $this->formatMessage($message, $this->theme->warningAlt())
        );
    }

    public function success(string $message): void
    {
        $this->termwind->render(
            content: $this->formatMessage($message, $this->theme->success())
        );
    }

    public function successAlt(string $message): void
    {
        $this->termwind->render(
            content: $this->formatMessage($message, $this->theme->successAlt())
        );
    }

    public function info(string $message): void
    {
        $this->termwind->render(
            content: $this->formatMessage($message, $this->theme->info())
        );
    }

    public function infoAlt(string $message): void
    {
        $this->termwind->render(
            content: $this->formatMessage($message, $this->theme->infoAlt())
        );
    }

    public function bold(string $message): void
    {
        $this->termwind->render(
            content: $this->formatMessage($message, $this->theme->bold())
        );
    }

    public function dim(string $message): void
    {
        $this->termwind->render(
            content: $this->formatMessage($message, $this->theme->dim())
        );
    }

    public function italic(string $message): void
    {
        $this->termwind->render(
            content: $this->formatMessage($message, $this->theme->italic())
        );
    }

    public function underline(string $message): void
    {
        $this->termwind->render(
            content: $this->formatMessage($message, $this->theme->underline())
        );
    }

    public function invert(string $message): void
    {
        $this->termwind->render(
            content: $this->formatMessage($message, $this->theme->invert())
        );
    }

    private function formatMessage(string $message, ThemeStyle $style): string
    {
        $foreground = $style->foreground->value;
        $background = $style->background?->value ?? '';

        if ($background) {
            $background = "bg-{$background}";
        }

        if ( ! in_array($foreground, TermwindStyle::fontStyles())) {
            $foreground = "text-{$foreground}";
        }

        return <<<HTML
            <div class="py-1">
                <span class="ml-1 {$foreground} {$background}">{$message}</span>
            </div>
        HTML;
    }
}
