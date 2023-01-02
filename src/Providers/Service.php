<?php

declare(strict_types=1);

namespace Package\Providers;

use Illuminate\Support\ServiceProvider as BaseProvider;

class Service extends BaseProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->mergeConfigFrom(__DIR__ . "/../../config/package.php", "acv");
    }

    public static function isEnabled(): bool
    {
        return true;
    }
}
