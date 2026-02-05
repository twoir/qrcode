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

namespace Twoir\QrCode\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Twoir\QrCode\Services\QrCode setOutputBase64(bool $enable)
 * @method static bool isOutputBase64()
 * @method static string getMimeType()
 * @method static string|\GdImage render(?string $data = null, ?string $file = null)
 * @method static \Twoir\QrCode\Services\QrCode setOptions(\chillerlan\Settings\SettingsContainerInterface $options)
 * @method static \chillerlan\QRCode\Decoder\DecoderResult readFromBlob(string $blob)
 * @method static \chillerlan\QRCode\Decoder\DecoderResult readFromFile(string $path)
 * @method static \chillerlan\QRCode\Decoder\DecoderResult readFromSource(\chillerlan\QRCode\Common\LuminanceSourceInterface $source)
 *
 * @see \Twoir\QrCode\Services\QrCode
 */
class QrCode extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'qrcode';
    }
}
