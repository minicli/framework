<?php

declare(strict_types=1);

use Minicli\App;
use Minicli\Framework\Configuration\Config;
use Minicli\Framework\Minicli;

it('can get the version of Minicli', function (): void {
    expect(
        Minicli::VERSION,
    )->toBeString()->toEqual('0.0.1');
});

it('can create a new minicli instance passing through the config', function (): void {
    expect(
        new Minicli(
            config: Config::make(
                data: [
                    'path' => 'test',
                    'theme' => '',
                ],
            ),
            app: new App(),
        ),
    )->toBeInstanceOf(Minicli::class);
});

it('can statically create a new Minicli', function (): void {
    expect(
        Minicli::boot(
            path: 'test',
            theme: '',
            debug: true,
        ),
    )->toBeInstanceOf(Minicli::class);
});
