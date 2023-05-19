<?php

declare(strict_types=1);

namespace Minicli\Framework\Commands;

use Minicli\Framework\Contracts\Commands\CommandContract;
use Minicli\Framework\Exceptions\MissingParametersException;
use Minicli\Framework\Input\Input;

abstract class AbstractCommand implements CommandContract
{
    /**
     * @throws MissingParametersException
     */
    public function boot(Input $input): void
    {
        $missing = array_diff($this->required(), array_keys($input->params()));

        if ([] !== $missing) {
            throw new MissingParametersException($missing);
        }
    }

    /**
     * @return array<int,string>
     */
    public function required(): array
    {
        return [];
    }

    public function teardown(): void
    {
    }
}
