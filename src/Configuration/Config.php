<?php

declare(strict_types=1);

namespace Minicli\Framework\Configuration;

use Minicli\Framework\Contracts\Output\EngineContract;
use Minicli\Framework\Contracts\Output\PrinterContract;
use Minicli\Framework\Contracts\Theme\ThemeContract;

final class Config
{
    /**
     * @param string $path
     * @param class-string<ThemeContract>|null $theme
     * @param class-string<PrinterContract>|null $printer
     * @param class-string<EngineContract>|null $engine
     * @param bool $debug
     */
    public function __construct(
        private readonly string $path,
        private readonly ?string $theme = null,
        private readonly ?string $printer = null,
        private readonly ?string $engine = null,
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
            'printer' => $this->printer,
            'engine' => $this->engine,
            'debug' => $this->debug,
        ];
    }

    /**
     * @param array{path:string,theme:class-string<ThemeContract>|null,printer:class-string<PrinterContract>|null,engine:class-string<EngineContract>|null,debug:bool|null} $data
     * @return Config
     */
    public static function make(array $data): Config
    {
        return new Config(
            path: $data['path'],
            theme: $data['theme'],
            printer: $data['printer'],
            engine: $data['engine'],
            debug: $data['debug'] ?? false,
        );
    }

    public function path(): string
    {
        return $this->path;
    }

    /**
     * @return class-string<ThemeContract>|null
     */
    public function theme(): ?string
    {
        return $this->theme;
    }

    /**
     * @return class-string<PrinterContract>|null
     */
    public function printer(): ?string
    {
        return $this->printer;
    }

    /**
     * @return class-string<EngineContract>|null
     */
    public function engine(): ?string
    {
        return $this->engine;
    }

    public function debug(): bool
    {
        return $this->debug;
    }
}
