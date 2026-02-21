<?php

namespace App\Sms;

use Illuminate\Support\ServiceProvider;
use App\Sms\Contracts\SmsSender;
use App\Sms\Providers\KavenegarSmsSender;
use App\Sms\Providers\NullSmsSender;

final class SmsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(SmsSender::class, function () {

            return match (config('sms.driver')) {
                'kavenegar' => new KavenegarSmsSender(
                    config('sms.kavenegar.api_key'),
                    config('sms.default_sender'),
                ),
                default => new NullSmsSender(),
            };
        });
    }
}
