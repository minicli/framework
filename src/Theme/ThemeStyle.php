<?php

declare(strict_types=1);

namespace Minicli\Framework\Theme;

use Minicli\Framework\Theme\Enums\Background;
use Minicli\Framework\Theme\Enums\FontWeight;
use Minicli\Framework\Theme\Enums\Foreground;
use Minicli\Framework\Theme\Enums\TermwindColor;

final class ThemeStyle
{
    public function __construct(
        public readonly FontWeight|Foreground|TermwindColor $foreground,
        public readonly Background|TermwindColor|null $background = null
    ) {
    }

    public static function make(FontWeight|Foreground $foreground, ?Background $background = null): self
    {
        return new self($foreground, $background);
    }
}
