<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CouponHasUser extends Pivot
{
    public $timestamps = false;

    protected $table = 'coupon_has_users';
}
