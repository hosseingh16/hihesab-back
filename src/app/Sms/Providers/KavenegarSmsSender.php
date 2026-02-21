<?php

namespace App\Sms\Providers;

use App\Sms\Contracts\SmsSender;
use App\Sms\Contracts\SmsResult;
use Illuminate\Support\Facades\Http;


final class KavenegarSmsSender implements SmsSender
{
    public function __construct(
        private readonly string $apiKey,
        private readonly string $defaultSender,
    ) {}

    public function send(string $to, string $message, ?string $from = null): SmsResult
    {
        $from = $from ?? $this->defaultSender;

        try {
            $response = Http::asForm()->post(
                "https://api.kavenegar.com/v1/{$this->apiKey}/sms/send.json",
                [
                    'receptor' => $to,
                    'sender' => $from,
                    'message' => $message,
                ]
            );

            if (!$response->ok()) {
                return new SmsResult(false, null, 'HTTP_' . $response->status());
            }

            $data = $response->json();
            $messageId = $data['entries'][0]['messageid'] ?? null;

            return new SmsResult(true, $messageId);
        } catch (\Throwable $e) {
            return new SmsResult(false, null, $e->getMessage());
        }
    }
}
