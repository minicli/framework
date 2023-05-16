<?php

declare(strict_types=1);

namespace Minicli\Framework\Attributes;

use Attribute;

#[Attribute]
final readonly class Signature
{
    public function __construct(
        public string $signature,
    ) {}
}
