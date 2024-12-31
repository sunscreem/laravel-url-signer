<?php

namespace Spatie\UrlSigner\Laravel;

use DateTime;
use Spatie\UrlSigner\Sha256UrlSigner;

class UrlSigner extends Sha256UrlSigner
{
    public function sign(
        string $url,
        $expiration = null,
        $signatureKey = null,
    ): string {
        $expiration ??= config('url-signer.default_expiration_time_in_seconds');

        return parent::sign($url, $expiration, $signatureKey);
    }
}
