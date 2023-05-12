<?php

declare(strict_types=1);

namespace Minicli\Framework\Configuration;

final class Config
{
    public function __construct(
        private readonly string $path,
        private readonly string $theme = '',
        private readonly bool $debug = false,
    ) {
    }

    /**
     * @return array{path:string,theme:string,debug:bool}
     */
    public function toArray(): array
    {
        return [
            'path' => $this->path,
            'theme' => $this->theme,
            'debug' => $this->debug,
        ];
    }

    /**
     * @param array{path:string,theme:string,debug:bool|null} $data
     * @return Config
     */
    public static function make(array $data): Config
    {
        return new Config(
            path: $data['path'],
            theme: $data['theme'],
            debug: $data['debug'] ?? false,
        );
    }
}
