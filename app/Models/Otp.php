<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected $appends = [];

    protected $with = [];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('order', function (Builder $builder): void {
            $builder->orderByDesc('created_at');
        });
        static::creating(function ($item): void {
            $item->ip = request()->getClientIp();
        });
    }

    /*
    * Relations
    */
}
