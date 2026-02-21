<?php

namespace App\Sms\Contracts;

final class SmsResult
{
    public function __construct(
        public readonly bool $success,
        public readonly ?string $providerMessageId = null,
        public readonly ?string $error = null,
        public readonly array $meta = [],
    ) {}
}
