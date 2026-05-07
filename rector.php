<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use RectorLaravel\Set\LaravelLevelSetList;

return RectorConfig::configure()
    ->withSets([
        LaravelLevelSetList::UP_TO_LARAVEL_110, // Adjust to your target Laravel version
        // Add other desired sets (e.g., code quality sets)
    ])
    ->withPaths([
        __DIR__ . '/app',
        __DIR__ . '/config',
        __DIR__ . '/resources',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ])->withSkip([
        __DIR__ . '/app/database/migrations',
    ])->withPreparedSets(deadCode: true, codeQuality: true, naming: true, privatization: true);
