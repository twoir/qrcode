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

namespace Twoir\QrCode\Facade;

use Illuminate\Support\Facades\Facade;
use Twoir\QrCode\Services\QrCode as QrCodeService;

class QrCode extends Facade
{
    protected static function getFacadeAccessor()
    {
        return QrCodeService::class;
    }
}
