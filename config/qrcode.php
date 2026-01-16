<?php

return [
    'version' => 6,
    /**
     * Output format for the QR code. This determines the file or markup type generated.
     *
     * Supported values:
     * - 'png'  : Raster image (recommended for web)
     * - 'jpeg' : Raster image, lossy compression
     * - 'svg'  : Vector format, scalable without quality loss
     * - 'eps'  : Vector format, suitable for print
     * - 'html' : Table-based representation using <div> or <table>
     * - 'text' : ASCII-art style character grid
     */
    'outputType' => 'png',
    /**
     * Error correction level values (as defined in ISO/IEC 18004) are represented by integer constants:
     * - L (Low)    => 1
     * - M (Medium) => 0
     * - Q (Quartile) => 3
     * - H (High)   => 2
     * Note: These values are not sequential. Internally, the encoder uses the integer constant (e.g., 3 for Q),
     * not the string label. Always ensure the correct integer mapping is applied when configuring the QR code generator.
     */
    'eccLevel' => 3,
    'addQuietzone' => true,
    'quietzoneSize' => 2,
    'scale' => 9,
    // Whether to output image data as Base64-encoded string by default
    'outputBase64' => true,
    'moduleValues' => [
        // finder
        1536 => [0, 63, 255], // dark (true)
        6 => [255, 255, 255], // light (false), white is the transparency color and is enabled by default
        5632 => [241, 28, 163], // finder dot, dark (true)
        // alignment
        2560 => [255, 0, 255],
        10 => [255, 255, 255],
        // timing
        3072 => [255, 0, 0],
        12 => [255, 255, 255],
        // format
        3584 => [67, 99, 84],
        14 => [255, 255, 255],
        // version
        4096 => [62, 174, 190],
        16 => [255, 255, 255],
        // data
        1024 => [0, 0, 0],
        4 => [255, 255, 255],
        // darkmodule
        512 => [0, 0, 0],
        // separator
        8 => [255, 255, 255],
        // quietzone
        18 => [255, 255, 255],
        // logo (requires a call to QRMatrix::setLogoSpace())
        20 => [255, 255, 255],
    ],
];
