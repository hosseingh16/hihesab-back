<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Enums\User\UserType;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasApiTokens;
    use HasFactory, Notifiable;
    use HasRoles;
    use SoftDeletes;
    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($item): void {
            if (empty($item->avatar)) {
                $item->avatar = 'files/default-avatar.png';
            }
        });

        static::updating(function ($item): void {
            if (empty($item->avatar)) {
                $item->avatar = 'files/default-avatar.png';
            }
        });
    }
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',

            'type' => UserType::class,

            'approved' => 'boolean',
            'controlled' => 'boolean',
            'archived' => 'boolean',
            'cv_visibility' => 'boolean',

        ];
    }


    /*
     * Relations
     */
    public function company(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Company::class, 'user_id');
    }

    public function user_flag(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(UserFlag::class, 'user_id');
    }

    public function resumePersonal(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ResumePersonal::class, 'user_id');
    }

    public function resumeEducations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ResumeEducation::class, 'user_id');
    }

    public function resumePriors(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ResumePrior::class, 'user_id');
    }

    public function resumePotential(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ResumePotential::class, 'user_id');
    }

    public function resumeSkill(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ResumeSkill::class, 'user_id');
    }

    public function resumeSoftwares(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ResumeSoftware::class, 'user_id');
    }
}
