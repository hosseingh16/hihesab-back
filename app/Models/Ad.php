<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ad extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const VALID_TYPES = [
        'تمام وقت' => 'تمام وقت',
        'پاره وقت' => 'پاره وقت',
        'پروژه ای' => 'پروژه ای',
        'دورکاری' => 'دورکاری',
        'کارآموزی' => 'کارآموزی',
    ];

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
        static::addGlobalScope('order', function (Builder $query) {
            $query->orderByDesc('republish_at')->orderBy('placement')->orderByDesc('created_at');
        });
    }

    /*
    * Relations
    */
    public function company(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function createdBy(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function province(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function adsRequests(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(AdsRequest::class, 'job_id');
    }

    public function order(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
