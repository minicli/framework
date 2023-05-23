<?php

declare(strict_types=1);

namespace Minicli\Framework\Output\Services;

use Closure;
use Symfony\Component\Console\Output\OutputInterface;
use Termwind\Terminal;
use Termwind\ValueObjects\Style;

use function Termwind\ask;
use function Termwind\render;
use function Termwind\style;
use function Termwind\terminal;

final class Termwind
{
    public function render(string $content, int $options = OutputInterface::OUTPUT_NORMAL): void
    {
        render($content, $options);
    }

    public function style(string $name, Closure $callback = null): Style
    {
        return style($name, $callback);
    }

    public function terminal(): Terminal
    {
        return terminal();
    }

    /**
     * @param string $question
     * @param iterable<(int|string),string>|null $autocomplete
     * @return mixed
     */
    public function ask(string $question, iterable $autocomplete = null): mixed
    {
        return ask($question, $autocomplete);
    }
}
