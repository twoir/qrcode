<?php

/**
 * Trademark Management System (Version 1.0.1)
 *
 * Copyright (c) 2019–2026 cighsen02 <xiayu@959602.com>
 *
 * This software is proprietary. For commercial licensing,
 * please visit https://www.ubtm.cn.
 *
 * @created 2026.01.16
 */

namespace Twoir\QrCode;

use Illuminate\Support\ServiceProvider;
use Twoir\QrCode\Services\QrCode;

class QrCodeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/qrcode.php', 'qrcode');
        $this->app->singleton(QrCode::class, fn ($app) => new QrCode);
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/qrcode.php' => config_path('qrcode.php'),
        ], 'qrcode-config');
    }
}
