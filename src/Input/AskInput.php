<?php

declare(strict_types=1);

namespace Minicli\Framework\Input;

final class AskInput
{
    /**
     * @param string $prompt
     * @param array<int,string> $inputHistory
     */
    public function __construct(
        private string $prompt = '> ',
        private array $inputHistory = [],
    ) {
    }

    public static function make(string $prompt = '> ', array $inputHistory = []): AskInput
    {
        return new self($prompt, $inputHistory);
    }

    public function read(): string
    {
        $input = (string) readline($this->prompt);
        $this->inputHistory[] = $input;

        return $input;
    }

    public function prompt(): string
    {
        return $this->prompt;
    }

    public function history(): array
    {
        return $this->inputHistory;
    }

    public function setPrompt(string $prompt): AskInput
    {
        $this->prompt = $prompt;

        return $this;
    }
}
