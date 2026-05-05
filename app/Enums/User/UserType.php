<?php

namespace App\Enums\User;

enum UserType: string
{
    case JOBSEEKER = 'jobseeker';
    case EMPLOYER = 'employer';
    case VIP_USER = 'vip_user';
}
