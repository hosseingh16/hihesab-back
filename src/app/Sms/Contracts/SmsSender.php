<?php

namespace App\Sms\Contracts;

use App\Sms\Contracts\SmsResult;

interface SmsSender
{
    public function send(string $to, string $message, ?string $from = null): SmsResult;
}
