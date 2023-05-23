<?php

declare(strict_types=1);

namespace Minicli\Framework\Theme;

use Minicli\Framework\Theme\Enums\Background;
use Minicli\Framework\Theme\Enums\FontWeight;
use Minicli\Framework\Theme\Enums\Foreground;
use Minicli\Framework\Theme\Enums\TermwindStyle;

final class ThemeStyle
{
    public function __construct(
        public readonly FontWeight|Foreground|TermwindStyle $foreground,
        public readonly Background|TermwindStyle|null $background = null
    ) {
    }

    public static function make(
        FontWeight|Foreground|TermwindStyle $foreground,
        Background|TermwindStyle|null $background = null
    ): self {
        return new self($foreground, $background);
    }
}
