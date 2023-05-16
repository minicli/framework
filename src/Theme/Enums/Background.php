<?php

declare(strict_types=1);

namespace Minicli\Framework\Theme\Enums;

use Minicli\Framework\Contracts\Theme\MiniEnum;

enum Background: string implements MiniEnum
{
    case BLACK = '40';
    case WHITE = '47';
    case RED = '41';
    case GREEN = '42';
    case BLUE = '44';
    case CYAN = '46';
    case MAGENTA = '45';
    case YELLOW = '43';
}
