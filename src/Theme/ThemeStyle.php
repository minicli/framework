<?php

declare(strict_types=1);

namespace Minicli\Framework\Theme;

use Minicli\Framework\Theme\Enums\Background;
use Minicli\Framework\Theme\Enums\FontWeight;
use Minicli\Framework\Theme\Enums\Foreground;

final class ThemeStyle
{
    public function __construct(
        public readonly FontWeight|Foreground $foreground,
        public readonly ?Background $background = null
    ) {
    }

    public static function make(FontWeight|Foreground $foreground, ?Background $background = null): self
    {
        return new self($foreground, $background);
    }
}
