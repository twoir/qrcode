<?php

/**
 * Trademark Management System
 *
 * Copyright (c) 2019–2026 cighsen02 <xiayu@959602.com>
 *
 * This software is proprietary. For commercial licensing,
 * please visit https://www.ubtm.cn.
 *
 * Created at: 2026.01.16
 * Updated at: 2026.02.08
 */

namespace Twoir\QrCode;

use chillerlan\QRCode\QROptions;
use Illuminate\Support\ServiceProvider;
use Twoir\QrCode\Services\QrCode;

class QrCodeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/qrcode.php', 'qrcode');
        $this->app->bindIf(QROptions::class, static function ($app) {
            return new QROptions($app->make('config')->get('qrcode'));
        });
        $this->app->singleton(QrCode::class, static function ($app) {
            return new QrCode($app->make(QROptions::class));
        });
        $this->app->alias(QrCode::class, 'qrcode');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/qrcode.php' => config_path('qrcode.php'),
        ], 'qrcode-config');
    }

    public function provides(): array
    {
        return [
            QrCode::class,
            'qrcode',
            QROptions::class,
        ];
    }
}
