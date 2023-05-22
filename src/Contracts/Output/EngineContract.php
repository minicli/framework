<?php

declare(strict_types=1);

namespace Minicli\Framework\Contracts\Output;

use Minicli\Framework\Output\Table;

interface EngineContract
{
    public function print(string $message): void;

    public function lineBreak(): void;

    public function table(Table $table): void;

    public function ask(string $question, string $method = 'default'): string;

    public function default(string $message): void;

    public function alt(string $message): void;

    public function error(string $message): void;

    public function errorAlt(string $message): void;

    public function warning(string $message): void;

    public function warningAlt(string $message): void;

    public function success(string $message): void;

    public function successAlt(string $message): void;

    public function info(string $message): void;

    public function infoAlt(string $message): void;

    public function bold(string $message): void;

    public function dim(string $message): void;

    public function italic(string $message): void;

    public function underline(string $message): void;

    public function invert(string $message): void;
}
