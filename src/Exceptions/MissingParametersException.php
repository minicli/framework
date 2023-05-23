<?php

declare(strict_types=1);

namespace Minicli\Framework\Exceptions;

use Exception;

final class MissingParametersException extends Exception
{
    public function __construct(array $missing)
    {
        parent::__construct(sprintf(
            'Missing required parameter(s): %s',
            implode(', ', $missing)
        ));
    }
}
