<?php

declare(strict_types=1);

use Minicli\Framework\Configuration\Config;

it('can create a new config object', function (): void {
    expect(
        new Config(
            path: 'test',
            theme: 'test',
            debug: false,
        ),
    )->toBeInstanceOf(Config::class);
});

it('can create a config using the static make method', function (): void {
    expect(
        Config::make(
            data: [
                'path' => 'test',
                'theme' => '',
            ],
        ),
    )->toBeInstanceOf(Config::class);
});

it('can turn the config object into an array that minicli understands', function (): void {
    $config = Config::make(
        data: [
            'path' => 'test',
            'theme' => '',
        ],
    );

    expect(
        $config->toArray(),
    )->toBeArray()->toHaveKeys(
        keys: ['app_path','theme','debug'],
    );
});
