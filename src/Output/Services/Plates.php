<?php

declare(strict_types=1);

namespace Minicli\Framework\Output\Services;

use League\Plates\Engine;

final class Plates
{
    private Engine $engine;

    public function __construct(string $path)
    {
        $this->engine = new Engine($path);
    }

    public function view(string $template, array $data = []): string
    {
        return $this->engine->render($template, $data);
    }
}
