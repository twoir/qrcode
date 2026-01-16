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

namespace Twoir\QrCode\Services;

use chillerlan\QRCode\Output\QROutputInterface;
use chillerlan\QRCode\QRCode as ChillerlanQRCode;
use chillerlan\QRCode\QROptions;
use Illuminate\Support\Facades\Config;
use RuntimeException;

use function class_exists;
use function class_implements;
use function constant;
use function in_array;

class QrCode extends ChillerlanQRCode
{
    public function __construct()
    {
        $options = new QROptions(Config::get('qrcode'));

        parent::__construct($options);
    }

    /**
     * Enables or disables Base64 encoding for the output.
     */
    public function setOutputBase64(bool $outputBase64 = true): self
    {
        $this->options->outputBase64 = $outputBase64;

        return $this;
    }

    /**
     * Checks whether the output is currently set to be Base64-encoded.
     */
    public function isOutputBase64(): bool
    {
        return $this->options->outputBase64;
    }

    /**
     * Returns the MIME type of the output (e.g. image/png).
     */
    public function getMimeType(): string
    {
        $outputInterface = QROutputInterface::MODES[$this->options->outputType] ?? null;
        if (! $outputInterface || ! class_exists($outputInterface)) {
            throw new RuntimeException('invalid output module');
        }
        if (! in_array(QROutputInterface::class, class_implements($outputInterface), true)) {
            throw new RuntimeException('output module does not implement QROutputInterface');
        }

        return constant($outputInterface.'::MIME_TYPE');
    }
}
