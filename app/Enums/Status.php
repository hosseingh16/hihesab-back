<?php

declare(strict_types=1);

namespace App\Enums;

enum Status: int
{
    // Metadata: labels & colors
    private const METADATA = [
        self::ACTIVE->value => ['label' => 'فعال', 'color' => 'success'],
        self::INACTIVE->value => ['label' => 'غیرفعال', 'color' => 'danger'],
        self::PENDING->value => ['label' => 'در انتظار بررسی', 'color' => 'warning'],
        self::PROCESSING->value => ['label' => 'در حال پردازش', 'color' => 'info'],
        self::COMPLETED->value => ['label' => 'تکمیل شده', 'color' => 'success'],
        self::SUSPENDED->value => ['label' => 'معلق', 'color' => 'warning'],
        self::CANCELLED->value => ['label' => 'لغو شده', 'color' => 'danger'],
        self::RETURNED->value => ['label' => 'مرجوع شده', 'color' => 'danger'],
        self::PAID->value => ['label' => 'پرداخت شده', 'color' => 'success'],
        self::APPROVED->value => ['label' => 'تایید شده', 'color' => 'success'],
        self::REJECTED->value => ['label' => 'رد شده', 'color' => 'danger'],
        self::DRAFT->value => ['label' => 'پیش نویس', 'color' => 'secondary'],
        self::PUBLISHED->value => ['label' => 'منتشر شده', 'color' => 'success'],
        self::SCHEDULED->value => ['label' => 'در انتظار انتشار', 'color' => 'primary'],
        self::UNPUBLISHED->value => ['label' => 'منتشر نشده', 'color' => 'danger'],
        self::DONE->value => ['label' => 'انجام شده', 'color' => 'success'],
        self::ON_HOLD->value => ['label' => 'در انتظار', 'color' => 'warning'],
        self::UNDER_REVIEW->value => ['label' => 'در حال بازبینی', 'color' => 'info'],
        self::FAILED->value => ['label' => 'ناموفق', 'color' => 'danger'],
        self::DELETED->value => ['label' => 'حذف شده', 'color' => 'danger'],
        self::ARCHIVED->value => ['label' => 'بایگانی شده', 'color' => 'secondary'],
        self::IN_PROGRESS->value => ['label' => 'در جریان', 'color' => 'info'],
        self::NOT_STARTED->value => ['label' => 'شروع نشده', 'color' => 'secondary'],
        self::OVERDUE->value => ['label' => 'سررسید گذشته', 'color' => 'danger'],
        self::AWAITING_FEEDBACK->value => ['label' => 'در انتظار بازخورد', 'color' => 'warning'],
        self::ESCALATED->value => ['label' => 'ارجاع شده', 'color' => 'warning'],
        self::ONGOING->value => ['label' => 'در حال انجام', 'color' => 'info'],
        self::BLOCKED->value => ['label' => 'مسدود شده', 'color' => 'danger'],
        self::RESOLVED->value => ['label' => 'حل شده', 'color' => 'success'],
        self::REOPENED->value => ['label' => 'باز شده مجدد', 'color' => 'warning'],
        self::TERMINATED->value => ['label' => 'خاتمه یافته', 'color' => 'danger'],
        self::SENT->value => ['label' => 'ارسال شده', 'color' => 'info'],
    ];

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function get(?array $statuses = null): array
    {
        if ($statuses === null || $statuses === []) {
            $statuses = self::cases();
        }

        return array_map(
            fn (self $status) => [
                'value' => $status->value,
                'label' => $status->label(),
                'color' => $status->color(),
            ],
            $statuses
        );
    }

    public function label(): string
    {
        return self::METADATA[$this->value]['label'];
    }

    public function color(): string
    {
        return self::METADATA[$this->value]['color'];
    }
    case ACTIVE = 1;
    case INACTIVE = 2;
    case PENDING = 3;
    case PROCESSING = 4;
    case COMPLETED = 5;
    case SUSPENDED = 6;
    case CANCELLED = 7;
    case RETURNED = 8;
    case PAID = 9;
    case APPROVED = 10;
    case REJECTED = 11;
    case DRAFT = 12;
    case PUBLISHED = 13;
    case SCHEDULED = 14;
    case UNPUBLISHED = 15;
    case DONE = 16;
    case ON_HOLD = 17;
    case UNDER_REVIEW = 18;
    case FAILED = 19;
    case DELETED = 20;
    case ARCHIVED = 21;
    case IN_PROGRESS = 22;
    case NOT_STARTED = 23;
    case OVERDUE = 24;
    case AWAITING_FEEDBACK = 25;
    case ESCALATED = 26;
    case ONGOING = 27;
    case BLOCKED = 28;
    case RESOLVED = 29;
    case REOPENED = 30;
    case TERMINATED = 31;
    case SENT = 32;
}
