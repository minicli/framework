<?php

declare(strict_types=1);

namespace Minicli\Framework\Configuration;

use Minicli\Framework\Theme\ThemeContract;

final class Config
{
    /**
     * @param string $path
     * @param class-string<ThemeContract>|null $theme
     * @param bool $debug
     */
    public function __construct(
        private readonly string $path,
        private readonly ?string $theme = null,
        private readonly bool $debug = false,
    ) {
    }

    /**
     * @return array{path:string,theme:class-string<ThemeContract>|null,debug:bool}
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
     * @param array{path:string,theme:class-string<ThemeContract>|null,debug:bool|null} $data
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
