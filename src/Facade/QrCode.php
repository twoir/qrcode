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
 * Updated at: 2026.02.06
 */

namespace Twoir\QrCode\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Twoir\QrCode\Services\QrCode setOutputBase64(bool $enable)
 * @method static bool isOutputBase64()
 * @method static string getMimeType()
 * @method static string|\GdImage render(?string $data = null, ?string $file = null)
 * @method static mixed renderMatrix(\chillerlan\QRCode\Data\QRMatrix $matrix, ?string $file = null)
 * @method static \chillerlan\QRCode\Data\QRMatrix getQRMatrix()
 * @method static bool isNumber(string $string)
 * @method static bool isAlphaNum(string $string)
 * @method static bool isKanji(string $string)
 * @method static bool isByte(string $string)
 * @method static \Twoir\QrCode\Services\QrCode addSegment(\chillerlan\QRCode\Data\QRDataModeInterface $segment)
 * @method static \Twoir\QrCode\Services\QrCode clearSegments()
 * @method static \Twoir\QrCode\Services\QrCode addNumericSegment(string $data)
 * @method static \Twoir\QrCode\Services\QrCode addAlphaNumSegment(string $data)
 * @method static \Twoir\QrCode\Services\QrCode addKanjiSegment(string $data)
 * @method static \Twoir\QrCode\Services\QrCode addHanziSegment(string $data)
 * @method static \Twoir\QrCode\Services\QrCode addByteSegment(string $data)
 * @method static \Twoir\QrCode\Services\QrCode addEciDesignator(int $encoding)
 * @method static \Twoir\QrCode\Services\QrCode addEciSegment(int $encoding, string $data)
 * @method static \Twoir\QrCode\Services\QrCode setOptions(\chillerlan\Settings\SettingsContainerInterface $options)
 * @method static \chillerlan\QRCode\Decoder\DecoderResult readFromBlob(string $blob)
 * @method static \chillerlan\QRCode\Decoder\DecoderResult readFromFile(string $path)
 * @method static \chillerlan\QRCode\Decoder\DecoderResult readFromSource(\chillerlan\QRCode\Common\LuminanceSourceInterface $source)
 *
 * @see \Twoir\QrCode\Services\QrCode
 */
class QrCode extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'qrcode';
    }
}
