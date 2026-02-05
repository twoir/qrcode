<?php

/**
 * Trademark Management System
 *
 * Copyright (c) 2019–2026 cighsen02 <xiayu@959602.com>
 *
 * This software is proprietary. For commercial licensing,
 * please visit https://www.ubtm.cn.
 *
 * @created 2026.01.16
 */

namespace Twoir\QrCode;

use chillerlan\QRCode\QROptions;
use Illuminate\Support\ServiceProvider;
use Psr\Log\LoggerInterface;
use Twoir\QrCode\Contracts\QrLogger;
use Twoir\QrCode\Services\QrCode;

class QrCodeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/qrcode.php', 'qrcode');
        $this->app->singleton(QrLogger::class, function ($app) {
            return $app->make(LoggerInterface::class);
        });
        $this->app->bindIf(QROptions::class, function ($app) {
            $config = $app->make('config')->get('qrcode');

            return new QROptions($config);
        });
        $this->app->singleton(QrCode::class, function ($app) {
            return new QrCode(
                $app->make(QrLogger::class),
                $app->make(QROptions::class)
            );
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
            QrLogger::class,
            QROptions::class,
        ];
    }
}
