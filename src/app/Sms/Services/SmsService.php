<?php

namespace App\Sms\Services;

use App\Sms\Contracts\SmsSender;
use App\Sms\Exceptions\SmsSendFailedException;

final class SmsService
{
    public function __construct(private readonly SmsSender $sender) {}

    public function sendOtp(string $mobile, string $code): void
    {
        $message = "کد ورود شما: {$code}";

        $result = $this->sender->send($mobile, $message);

        if (!$result->success) {
            throw new SmsSendFailedException($result->error ?? 'SMS_FAILED');
        }
    }

    public function sendText(string $mobile, string $message): void
    {
        $result = $this->sender->send($mobile, $message);

        if (!$result->success) {
            throw new SmsSendFailedException($result->error ?? 'SMS_FAILED');
        }
    }
}
