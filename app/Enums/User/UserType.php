<?php

declare(strict_types=1);

namespace App\Enums\User;

enum UserType: string
{
    case JOBSEEKER = 'jobseeker';
    case EMPLOYER = 'employer';
    case VIP_USER = 'vip_user';
}
