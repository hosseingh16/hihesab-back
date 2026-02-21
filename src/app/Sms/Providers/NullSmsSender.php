<?php

namespace App\Sms\Providers;

use App\Sms\Contracts\SmsResult;
use App\Sms\Contracts\SmsSender;

final class NullSmsSender implements SmsSender
{
    public function send(string $to, string $message, ?string $from = null): SmsResult
    {
        return new SmsResult(true, 'null-provider', null, ['to' => $to, 'message' => $message]);
    }
}
